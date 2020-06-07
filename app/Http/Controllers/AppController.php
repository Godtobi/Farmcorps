<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetStartedQuerry;
use App\Mail\WelcomeMail;
use App\Models\Contact;
use App\Models\FindFarm;
use App\Models\Newsletters;
use App\Models\UserFarmer;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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

    public function foodCompany(){
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

    public function blogIndex(){
        return view('blog.blog');
    }

    public function blogOne(){
        return view('blog.blog-post');
    }

    public function blogTwo(){
        return view('blog.blog-post1');
    }

    public function blogThree(){
        return view('blog.blog-post2');
    }

    public function getStartedPage(){
        return view('getStarted');
    }

    public function findFarm(GetStartedQuerry $request){
        $farms = User::query();
        $farms->where('crop',$request->crop)
            ->where('quantity','>=',$request->quantity);
        if($request->preferred=='1'){
            $request->validate(['state'=>'required']);
            $farms->whereIn('state',$request->state);
        }

        $farms=$farms->get();
        $my_farmers=[];
        foreach ($farms as $item=>$value){
            array_push($my_farmers,$value->id);
        }

        $user = new User();
        $user->name=$request->name;
        $user->password = Hash::make(Str::random(8));
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->company=$request->company;
        $user->personal_email=$request->personal_email;
        $user->role=$request->role;
        $user->adddress=$request->address;

    try{
        if($user->save()){
//            $user_farm= new UserFarmer();
//            $user_farm->user_id = $user->id;
//            $user_farm->farmer_id=\GuzzleHttp\json_encode($my_farmers);
//            $user_farm->save();
            $num=rand(1000,10000);
            $str=Str::random(4);

            $find= new FindFarm();
            $find->user_id = $user->id;
            $find->crop=$request->crop;
            $find->quantity=$request->quantity;
            $find->color=$request->color;
            $find->maturity=$request->get('maturity-condition');
            $find->source_state=$request->source_state;
            $find->source_lga = $request->source_lga;
            $find->state_location = $request->factory_state;
            $find->lga_location = $request->factory_lga;
            $find->production_id = $num.'-'.$str;
            $find->save();
        }
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ];

    }
    catch(\Exception $exception){
        //throw $exception;
        Alert::error('Error','Something went wrong. Please try again.');
        return back();
    }
        Mail::to($request->email)->send(new WelcomeMail($data));
        Alert::success('Success','Your registration was successful. Kindly check your mail for login details.');
        return back();
    }

    public function contact(){
        Mapper::map(6.597180, 3.352470, ['zoom' => 15, 'markers' => ['title' => 'My Location', 'animation' => 'DROP']]);
        return view('contact');
    }

    public function contactMessage(){
        $data = request()->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
////        dd($data);
//        $daata = ['name' => $data['name'],
//            'email'=>$data['email'],
//            'subject'=>$data['subject'],
//            'message'=>$data['message']];
        try{
            //Mail::to('job.oyebisi@gmail.com')->send(new MailContact($daata));

            Contact::create($data);

            Alert::success('Delivered', 'Message Sent Successfully');


        }
        catch (\Exception $exception)
        {
            //throw $exception;
            Alert::error('Contact Message', 'Something went wrong. please try again');

        }
        return back();
    }

    public function sitemap(){
        return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }

}
