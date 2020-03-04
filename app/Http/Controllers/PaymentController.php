<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $ref=mt_rand(100000,999999);
        $txref = "rave-".$ref; // ensure you generate unique references per transaction.
        $PBFPubKey = "FLWPUBK-ce329602a75815d506ada47fc0a1b1a6-X"; // get your public key from the dashboard.
        //dd($PBFPubKey);
        $redirect_url = "http://limitless-everglades-18861.herokuapp.com//payment/completed/";
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
        $data =$request->all();
        dd($request->all());
        $data['user_id']=auth()->user()->id;
        $response = json_decode($request->body);

        $user = User::find(auth()->user()->id);

        $signature=$request->get('verif-hash');
        if(empty($signature)){

        }

        $local_signature = getenv('SECRET_HASH');

        if( $signature !== $local_signature ){
            // silently forget this ever happened
            exit();
        }

        if ($request->body->status == 'successful') {
           try{
               $account=Account::where('user_id',auth()->user()->id);
               $balance=$account->balance + $data['money'];

               DB::beginTransaction();
               Transactions::create($data);
               $account->balance=$balance;
               $account->save();
               DB::commit();
           }
           catch (\Exception $exception){

           }
        }
        return view('admin.transfers.fund',compact('user'));
    }

}
