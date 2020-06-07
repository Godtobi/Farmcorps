<?php

namespace App\Http\Controllers;

use App\Models\FindFarm;
use App\Models\Newsletters;
use Illuminate\Http\Request;
//use Cornford\Googlmapper\Mapper as Map;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('map');
    }

    public function dashboard($id){
        $farm = FindFarm::findorfail($id);

        Mapper::map(8.490423603, 8.5200378, ['draggable' => true, 'eventClick' => 'window.location.href = "/mapped";'])
            ->informationWindow(6.524379, 3.379206, 'Maize Farm', ['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => 'Maize farm']])
            ->marker(13.06001548, 5.240031289, ['draggable' => true, 'eventClick' => 'window.location.href = "/mapped";']);
        return view('dashboard.dashboard',compact('farm'));
    }

    public function dashboardAgent(){

        return view('admin.index');
    }

    public function newsletters(){
        $emails = Newsletters::all();
        return view('admin.newsletter.index',compact('emails'));
    }

    public function map(){
//        Mapper::map(6.524379, 3.379206);
//        Mapper::map(6.210433572, 7.06999711);
//        Mapper::map(5.890427265, 5.680004434);
//        Mapper::map(8.490010192, 4.549995889);
//        Mapper::map(8.490423603, 8.5200378);
//        Mapper::map(7.970016092, 3.590002806);
//        Mapper::map(13.06001548, 5.240031289);
        //Mapper::marker(8.490423603, 8.5200378);
        Mapper::map(8.490423603, 8.5200378, ['draggable' => true, 'eventClick' => 'window.location.href = "/mapped";'])
            ->informationWindow(6.524379, 3.379206, 'Maize Farm', ['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => 'Maize farm']])
            ->marker(13.06001548, 5.240031289, ['draggable' => true, 'eventClick' => 'window.location.href = "/mapped";']);

        return view('maps.index');
    }


    public function map_details(){

        Mapper::map(7.401962, 3.917313, [ 'zoom' => 19, 'type' => 'HYBRID', 'overlay' => 'TRAFFIC']);

        return view('maps.mapped');
    }

    public function farms(){
        $farms = FindFarm::where('user_id',auth()->user()->id)->get();
        return view('dashboard.yourFarms',compact('farms'));
    }

    public function addFarms(Request $request){

        $num=rand(1000,10000);
        $str=Str::random(4);

        try{
                $find= new FindFarm();
                $find->user_id = auth()->user()->id;
                $find->crop=$request->crop;
                $find->quantity=$request->quantity;
                $find->color=$request->color;
                $find->maturity=$request->maturity;
                $find->source_state=$request->preferred_state;
                $find->source_lga = $request->preferred_lga;
                $find->state_location = $request->state_location;
                $find->lga_location = $request->lga_location;
                $find->production_id = $num.'-'.$str;
                $find->save();
        }
        catch(\Exception $exception){
            Alert::error('Error','Something went wrong. Please try again.');
            return back();
        }
        //Mail::to('oyebamijitobi@gmail.com')->send(new WelcomeMail($data));
        Alert::success('Success','We will get back to you once we find your farm.');
        return back();
    }

    public function signContract($id){
        $find = FindFarm::findorfail($id);

        $find->contract=2;
        $find->save();

        Alert::success('Success','Contract signed successfully.');
        return back();
    }
}
