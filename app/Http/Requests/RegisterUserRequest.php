<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'phonenumber_register' => [
                'required',
                'unique:user,phone_number',
                'regex:/^(01[2689]|09)[0-9]{8}$/'
            ],
            'password_register' => 'required|min:8',
            'repeatpassword_register' => 'required|same:password_register'
        ];
    }

    public function messages()
    {
        return [
            'phonenumber_register.required' => 'Bạn chưa nhập số điện thoại',
            'phonenumber_register.unique' => 'Số điện thoại đã tồn tại',
            'phonenumber_register.regex' => 'Số điện thoại không hợp lệ',
            'password_register.required' => 'Bạn chưa nhập mật khẩu',
            'password_register.min' => 'Mật khẩu phải từ 8 ký tự trở lên',
            'repeatpassword_register.required' => 'Bạn chưa nhập lại mật khẩu',
            'repeatpassword_register.same' => 'Mật khẩu không khớp'
        ];
    }
}
