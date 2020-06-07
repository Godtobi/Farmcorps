<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    public function index(){

        $user = User::find(auth()->user()->id);
        return view('admin.transfers.fund',compact('user'));
    }

    public function storePayment(Request $request){
        $data = $request->validate([
            'amount'=>'required',
            'email'=>'required',
            'currency'=>'required',
            'redirect_url'=>'required'
        ]);

        $curl = curl_init();
        $user = User::find(auth()->user()->id);
        $ref=mt_rand(100000,999999);
        $txref = "rave-".$ref; // ensure you generate unique references per transaction.
        $PBFPubKey = "FLWPUBK-ce329602a75815d506ada47fc0a1b1a6-X"; // get your public key from the dashboard.
        //dd($PBFPubKey);
        $redirect_url = "http://farmcorps.net/payment/completed/";
//        $payment_plan = "pass the plan id"; // this is only required for recurring payments.

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/hosted/pay",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'amount'=>$data['amount'],
                'customer_email'=>$data['email'],
                'currency'=>$data['currency'],
                'txref'=>$txref,
                'PBFPubKey'=>$PBFPubKey,
                'redirect_url'=>$redirect_url,
                'onStagingEnv'=>true,
                'custom_logo'=>config('app.rave.RAVE_LOGO'),
                'custom_title'=>'Farmcorps',
                'customer_firstname'=>$user->name,
                'customer_phone'=>$user->phone

            ]),
            CURLOPT_HTTPHEADER => [
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        //dd($response,'btw',$err);

        if($err){
            // there was an error contacting the rave API
            die('Curl returned error: ' . $err);
        }

        $transaction = json_decode($response);

        if(!$transaction->data && !$transaction->data->link){
            // there was an error from the API
            print_r('API returned error: ' . $transaction->message);
        }

        //dd($transaction->data->link);

        return redirect($transaction->data->link);

        //header('Location: ' . $transaction->data->link);
    }

    public function completedPayment(Request $request){

        $data=[];
        $data['user_id']=auth()->user()->id;
        $response = json_decode(json_encode($request->all()),true);
        $body = @file_get_contents("php://input");
        dd($response['resp']->data,'done');
        //dd($response);

        $sign = (isset($_SERVER['verif-hash']) ? $_SERVER['verif-hash'] : '');

        $user = User::find(auth()->user()->id);

        $signature=$request->get('verif-hash');

        if ($request->get('acctbusinessname')){

            $g=$request->get('acctbusinessname');
        }
        else{
            $g=null;
        }

        if(isset($request->data)){
            $f=$request->data;
        }else{
            $f=null;
        }
        if(isset($request->data)){
            $d=json_decode($request->data);
        }else{
            $d=null;
        }
        if(isset($request->txref)){
            $c=$request->txref;
        }else{
            $c=null;
        }

        if(isset($request->status)){
            $a=$request->status;
        }else{
            $a=null;
        }

        dd($signature,'1',$a,'2',$f,'3',$g,'0',$d,'er',$c,"000",dd($request->all()),'6000',dd(json_decode($request->all())),'op',$sign,"input",$body);
        if(empty($signature)){

        }

        $local_signature = config('app.rave.SECRET_HASH');

        if( $signature != $local_signature ){
            dd($response);
            exit();
        }

        if ($request->body->status == 'successful') {
           try{
               $data['status']=$request->body->status;
               $data['txid'] = $request->body->txid;
               $data['txref'] = $request->body->txref;
               $data['flwref'] = $request->body->flwref;
               $data['cycle'] = $request->body->cycle;
               $data['authmodel'] = $request->body->authmodel;
               $data['ip'] = $request->body->ip;
               $data['narration'] = $request->body->narration;
               $data['vbvmessage'] = $request->body->vbvmessage;
               $data['paymenttype'] = $request->body->paymenttype;
               $data['paymentid'] = $request->body->paymentid;
               $data['fraudstatus'] = $request->body->fraudstatus;
               $data['chargetype'] = $request->body->chargetype;
               $data['created'] = $request->body->created;
               $data['customerid'] = $request->body->customerid;
               $data['customerphone']= $request->body->custphone;
               $data['customername'] = $request->body->custname;
               $data['customermail'] = $request->body->custemail;
               $data['accountid'] = $request->body->accountid;
               $data['accountbusinessname'] = $request->body->acctbusinessname;
               $data['amountsettledfortranc']=$request->body->amountsettledforthistransaction;
               $data['raveref'] = $request->body->raveref;
               $data['orderref'] = $request->body->orderref;
               $data['cardexpmon'] =$request->body->expirymonth;
               $data['cardexpyr'] = $request->body->expiryyear;
               $data['cardlastdigit'] = $request->body->last4digits;

               $data['chargedmessage'] = $request->body->chargemessage;
               $data['chargeResponsecode'] = $request->body->chargecode;
               $data['chargeAmount'] = $request->body->amount;
               $data['chargeCurrency'] = $request->body->currency;




               DB::beginTransaction();
               Transactions::create($data);

               $account=Account::where('user_id',auth()->user()->id)->latest('created_at')->get();
               if(empty($account)){
                   $data['balance']=$data['chargeAmount'];
                   $data['type']='credit';
                   Account::create($data);
               }
               else{
                   $balance=$account->balance + $data['money'];
                   $account->balance=$balance;
                   $account->type='credit';
                   $account->save();
               }

               DB::commit();
           }
           catch (\Exception $exception){
                throw  $exception;
           }
        }
        Alert::success('Success','Your Account has been credited successfully');
        return redirect()->route('payment.index');
    }

}
