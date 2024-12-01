<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email'=>['required' , 'email' , 'exists:clients,email'],
            'password'=>['min:8'],
        ];
    }

    public function messages()
    {
        return [
            'email.required'=> 'پر کردن این بخش الزامی است',
            'email.exists'=> 'این ایمیل وجود ندارد',
            'email.email'=> 'ایمیل  نامعتبر است',
            'password.required'=> 'رمزعبور الزامی است',
        ];
    }
}
