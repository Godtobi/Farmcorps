<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFarmerRequest;
use App\Mail\RegisterFarmer;
use App\Models\Farmer;
use App\Models\Refferal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class FarmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create','store','index','registerFarmer','regFarmerStore','successReg','referredRegistration');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('farmer');
    }

    public function farmerIndex()
    {
        return view('farmers.farm.create');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(3);
        $data = request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:farmers|unique:users',
            'phone'=>'required',
            'password'=>'required|confirmed',
        ]);
        $data['name'] = $data['first_name'].' '.$data['last_name'];
        try{
            $farmer=Farmer::create($data);
            $user=User::create($data);
            $user->assignRole('farmer');
            Alert::success('Success','Farmer registered successfully');
            return back();

        }
        catch (\Exception $exception){
            Alert::error('error','Registration failed. Please try again');
            return back();
        }
    }

    public function storeFarm(Request $request)
    {
        dd(4);
        $data = request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:farmers|unique:users',
            'phone'=>'required',
            'type'=>'required',
            'crop'=>'required',
            'quantity'=>'required',
            'state'=>'required',
            'image'=>''

        ]);
        if($data['crop']=='maize'){
            $data['image']='maize.jpg';
        }
        elseif ($data['crop']=='millet'){
            $data['image']='millet.jpg';
        }
        else{
            $data['image']='sorghum.jpg';
        }
        $data['password'] = Str::random(8);
        $data['name'] = $data['first_name'].' '.$data['last_name'];
        try{
//            if (request()->has('image')) {
//                $namer=Str::random(8);
//                $image = request()->file('image');
//                $image_resize=Image::make($image)->resize(320,240);
//                $name = Str::slug($namer).'_'.time();
//                $folder = public_path('farm_uploads/');
//                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
////                $image_resize->save('storage'.$filePath);
//                $data['image']=$filePath;
//            }
//            $namer=Str::random(8);
//            $image = request()->file('image');
//            $name = Str::slug($namer).'_'.time();
//            $filePath = $name. '.' . $image->getClientOriginalExtension();
//            $disk = Storage::disk('gcs');
//            $disk->put('farm', $filePath);
//            $url = $disk->url('farm'.$filePath);
//            dd($url);
            //$farmer=Farmer::create($data);
            $user=User::create($data);
            $user->assignRole('farmer');
            Alert::success('Success','Farmer registered successfully');
            return back();

        }
        catch (\Exception $exception){
            throw $exception;
            Alert::error('error','Registration failed. Please try again');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function donate(){
        return view('admin.transfers.donate');
    }

    public function registerFarmer(){
        return view('farm_reg.reg');
    }

    public function regFarmerStore(RegisterFarmerRequest $request){
        //dd($request->all());

        $code=Str::random(8);
        $data=$request->all();
        $data['ref_code']=$code;
        $data['grains'] = \GuzzleHttp\json_encode($request->grains);
        $data['legumes']=json_encode($request->legumes);
        $data['vegetables']=json_encode($request->vegetables);
        $data['roots']=json_encode($request->roots);
        $data['password'] = $code;
        unset($data['bvn_confirmation'],$data['country'],$data['referral_code'],$data['accept']);

        $see = DB::table('users')->where('email',$data['email'])->exists();
        if($see){
            return back()->withErrors('Email already exist');
        }


        try{
            if(!empty($request->referral_code)){
                $check=DB::table('farmers')->where('ref_code',$request->get('referral_code'))->first();

                if(empty($check)){
                    return back()->withErrors('Invalid Referral Code');
                }
                $farmer=Farmer::create($data);
                $ref = new Refferal();
                $ref->ref_code = $request->referral_code;
                $ref->ref_farmer_id = $farmer->id;
                $ref->referral_id=$check->id;
                $ref->save();

            }
            else{
                $farmer=Farmer::create($data);
            }
            $farmer->assignRole(['farmer']);

            Mail::to($data['email'])->send(new RegisterFarmer($code,$farmer));
        }
        catch (\Exception $exception){

            return back()->withErrors('Something went wrong please try again');
        }


        return redirect()->route('reg.suc');
    }

    public function successReg(){
        return view('farm_reg.SuccessPage');
    }

    public function referredRegistration($ref){
        return view('farm_reg.reg',compact('ref'));
    }
}
