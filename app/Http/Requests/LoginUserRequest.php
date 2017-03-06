<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            //
            'phonenumber_login' => [
                'required',
                'regex:/^(01[2689]|09)[0-9]{8}$/'
            ],
            'password_login' => [
                'required',
                'min:8'
            ]
        ];
    }
}
