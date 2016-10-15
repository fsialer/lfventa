<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
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
           'provider_id'=>'required',
           'type_voucher'=>'required',
           'serie_voucher'=>'max:20|required',
           'num_voucher'=>'max:20|required',           
           'total'=>'required'
        ];
    }
}
