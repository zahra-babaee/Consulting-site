<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' =>['required'] ,
            'email' =>['required' , 'email' ],
            'description'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'پر کردن این بخش الزامی است',
            'email.required'=> 'پر کردن این بخش الزامی است',
            'description.required'=> 'پر کردن این بخش الزامی است',
            'email.email'=> 'ایمیل  نامعتبر است',
        ];
    }
}
