<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FarmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create','store','index');
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
}
