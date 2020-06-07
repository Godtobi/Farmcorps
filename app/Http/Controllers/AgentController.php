<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentNegotiate;
use App\Models\FindFarm;
use App\Models\User;
use App\Models\UserFarm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AgentController extends Controller
{
    public function request(){
        $requests = FindFarm::all();
        $userFarm = UserFarm::all();
        return view('admin.agent.index',compact('requests','userFarm'));
    }

    public function viewRequest($id){
        $request = FindFarm::findorfail($id);

        return view('admin.agent.showRequest',compact('request'));
    }

    public function assignFarm($id){
        $request=FindFarm::findorfail($id);
        $farmers = User::where('crop',$request->crop)->get();

        return view('admin.agent.assign_farm',compact('farmers','request','id'));
    }

    public function storeAssigned(Request $request){

        $user = User::find($request->farmer);
        $req = FindFarm::find($request->id);



        $user->quantity = $user->quantity - $request->qantity;
        $user->save();

        $req->quantity = $req->quantity - $request->quantity;

        if ($req->quantity==0){
            $req->status=1;
        }

        $req->save();

        Alert::success('Success','Farmer assigned successfully.');
        return redirect()->back();
    }

    public function checkCropQuantity(){
        $farmer=User::find(request()->id);

        return response()->json(['farmer'=>json_encode($farmer),'quantity'=>$farmer->quantity]);
    }

    public function production($id){
        $req = FindFarm::find($request->id);
        return view('admin.agent.production');
    }

    public function agentNegotiateStore(AgentNegotiate $request){
        try{
            $data=$request->all();
            $data['agent_id']=auth()->user()->id;
            $check = \App\Models\AgentNegotiate::where('agent_id',$data['agent_id'])->where('order_id',$data['order_id'])->first();
            if($check){
                Alert::error('Error','You have already negotiated.');
                return redirect()->back();
            }
            \App\Models\AgentNegotiate::create($data);

            Alert::success('Success','Negotiation  successfully.');
            return redirect()->back();
        }
        catch (\Exception $exception){
            throw $exception;
            Alert::error('Error','Something Went wrong. Please try again.');
            return redirect()->back();
        }

    }

    public function negotiations($id){

        $negotiations =\App\Models\AgentNegotiate::where('order_id',$id)->get();

        return view('admin.farms.dash',compact('negotiations'));
    }

    public function confirmNegotiate($id){
        $negotiations =\App\Models\AgentNegotiate::find($id);
        $negotiations->status=1;
        $negotiations->save();

        Alert::success('Success','Negotiation confirmed successfully.');
        return redirect()->back();
    }

}
