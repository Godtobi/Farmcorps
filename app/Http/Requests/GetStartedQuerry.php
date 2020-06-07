<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetStartedQuerry extends FormRequest
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

        return [
            'crop'=>'required',
            'quantity'=>'required',
            'color'=>'',
            'weight'=>'',
            'size'=>'',
            'maturity'=>'',
            'maturity-condition'=>'',
            'staggered'=>'',
            'time'=>'',
            'preferred'=>'',
            'name'=>'max:50',
            'personal_email'=>'',
            'company'=>'',
            'email'=>'',
            'role'=>'',
            'phone'=>'',
            'address'=>'',
            'preferred_state'=>'',
            'preferred_lga'=>'',


        ];
    }
}
