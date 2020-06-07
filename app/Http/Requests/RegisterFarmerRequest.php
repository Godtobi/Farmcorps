<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFarmerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //dd($this->request->get('referral_code'));
        //dd($this->request->all());
        return [
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'bvn'=>'required|confirmed',
            'email'=>'required|unique:farmers',
            'phone'=>'required',
            'state'=>'required',
            'city'=>'required',
            'referral_code'=>'',
            'grains'=>'',
            'legumes'=>'',
            'vegetables'=>'',
            'roots'=>'',
            'farmland'=>'',
            'smart_phone'=>'required',
            'farm_manager'=>'required',
            'accept'=>'required'
        ];
    }
}
