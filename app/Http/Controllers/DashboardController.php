<?php

namespace App\Http\Controllers;

use App\Models\Newsletters;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        return view('admin.index');
    }

    public function newsletters(){
        $emails = Newsletters::all();
        return view('admin.newsletter.index',compact('emails'));
    }
}
