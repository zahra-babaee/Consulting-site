<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'=>['required'],
            'email'=>['required' , 'email'],
            'phone'=>[],
            'password'=>['min:8'],
            'retryPassword'=>['same:password']
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'پر کردن این بخش الزامی است',
            'phone.required' =>'شماره تلفن الزامی است.',
            'phone.regex'=>'شماره تلفن نامعتبر است.',
            'email.required'=> 'پر کردن این بخش الزامی است',
            'email.email'=> 'ایمیل  نامعتبر است',
            'password.min'=> 'رمزعبور باید حداقل 8 رقم باشد',
            'retryPassword.same'=>'تکراررمز عبور با رمز عبور مطابقت ندارد'
        ];
    }
}
