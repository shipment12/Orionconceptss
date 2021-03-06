<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=> 'required',
            'password'=> 'required',
            'company'=>'required',
            'im_account'=>'required',
            'phone'=>'required',
            'terms'=>'required',
        ];
    }
}
