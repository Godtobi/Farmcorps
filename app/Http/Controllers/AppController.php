<?php

namespace App\Http\Controllers;

use App\Models\Newsletters;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
}
