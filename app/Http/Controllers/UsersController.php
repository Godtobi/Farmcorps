<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\PasswordMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Role;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create','store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => '',
            'description' => ''
        ]);

        $users = User::where('email',$data['email'])->exists();
        if($users){
            Alert::error('fail', 'Email is already taken.');
            return back();
        }

        $data['password'] = Str::random(6);

        if (Auth::check()){
            $message= 'User created successfully';
        }

        else{
            $message = "Thannk you for reaching out to us. One of our staff will get back to you shortly";
        }

        try{
            User::create($data);
            Alert::success('Success', $message);
            return back();
        }
        catch (\Exception $exception){

            Alert::error('fail', 'Something went wrong please try again.');
            return back();
        }

    }

    public function sendPassword($id){

        $user = User::find($id);

        if(empty($user)){
            Alert::error('fail', 'User not found.');
            return back();
        }

        if(!$user->hasanyrole(['admin','food_company','agro_dealer','farmer'])){
            Alert::error('fail', 'Assign a role to user before sending password.');
            return back();
        }

        $pass=Str::random('8');
        $data['name']=$user->name;
        $data['password']=$pass;
        $data['email']=$user->email;
        Mail::to('oyebamijitobi@gmail.com')->send(new PasswordMail($data));
        $user->password_counter+=1;
        $user->password = Hash::make($pass);
        $user->save();

        Alert::success('Success', "Password has been sent");
        return back();

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if(empty($user)){
            Alert::error('fail', 'User not found.');
            return back();
        }
       // dd($user->role_id);
        //$role=Role::find($user->role_id)->name;
        //dd($role);


        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if(empty($user)){
            Alert::error('fail', 'User not found.');
            return back();
        }

        return view('admin.users.edit',compact('user','id'));
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
        $data = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => '',
            'role'=>'required'
        ]);

        $user = User::find($id);

        $user->name =$data['name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->company = $data['company'];
        if ($user->save()){
            if ($data['role']==1){
                $user->assignRole('admin');
            }
            if ($data['role']==2){
                $user->assignRole('food_company');
            }
            if ($data['role']==3){
                $user->assignRole('agro_dealer');
            }
            if ($data['role']==5){
                $user->assignRole('farmer');
            }
        }

        Alert::success('Success', 'User Updated ');
        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = User::where('id', $id)->exists();
        if (!$blog) {
            Alert::error('User not found');
            return back();
        }

        $blog = User::find($id);
        $blog->delete($id);

        Alert::success('Success', 'User Deleted');
        return redirect()->route('users.index');

    }
}
