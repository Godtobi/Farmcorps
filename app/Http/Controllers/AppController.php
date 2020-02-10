<?php

namespace App\Http\Controllers;

use App\Models\Newsletters;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class AppController extends Controller
{


    public function newsletter(){
        $data = request()->validate([
           'email'=>'required|unique:newsletters'
        ]);

        Newsletters::create($data);

        Alert::success('Success','Subscription successful');
        return back();
    }

    public function farmerSignup(){
        return view('farmcopage');
    }


    public function agentSignup(){
        return view('agent_signup');
    }

    public function storeAgent(Request $request)
    {
        $data = request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:users',
            'location'=>'required',
            'password'=>'required|confirmed',
            'location'=>'required',
            'phone'=>'required',
            'state'=>'required',
            'lga'=>'required',
            'town'=>'required',
            'crop'=>'required',
            'experience'=>'required',
            'cert'=>'required',

        ]);




        $data['name'] = $data['first_name'].' '.$data['last_name'];
        $data['phone']=0;
        try{

            $user=User::create($data);
            $user->assignRole('agent');
            Alert::success('Success','Your registration was successfully');
            return back();

        }
        catch (\Exception $exception){
            throw $exception;
            Alert::error('error','Registration failed. Please try again');
            return back();
        }
    }

    public function showViews(){
        return view('thename');
    }
}
