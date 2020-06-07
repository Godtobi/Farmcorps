<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentNegotiate extends FormRequest
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
            'location'=>'required',
            'delivery_date'=>'required',
            'price_per_quantity'=>'required',
            'quantity'=>'required',
            'order_id'=>''
        ];
    }
}
