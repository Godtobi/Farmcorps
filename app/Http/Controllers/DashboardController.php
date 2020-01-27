<?php

namespace App\Http\Controllers;

use App\Models\Newsletters;
use Illuminate\Http\Request;
//use Cornford\Googlmapper\Mapper as Map;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('map');
    }

    public function dashboard(){

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
}
