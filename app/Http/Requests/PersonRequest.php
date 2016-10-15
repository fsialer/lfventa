<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'name'=>'max:90|required',
            'type_document'=>'required',
            'num_document'=>'max:40|required',
            'phone'=>'max:40|required',
            'email'=>'max:60|required|email|unique:people,email'

        ];
    }
}
