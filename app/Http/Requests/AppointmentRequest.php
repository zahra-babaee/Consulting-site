<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'date' => ['required'],
            'time' =>['required'],
            'consultant_id' =>['required'],
            'topic_id'=>['required']
//                , Rule::unique('clients')->ignore($user->id),

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام الزامی است',
            'email.required' => 'ایمیل الزامی است',
            'phone.required' => 'شماره موبایل الزامی است',
            'email.email' => 'ایمیل نامعتبر است',
            'date.required' => 'تاریخ الزامی است.',
            'time.required'=> 'ساعت الزامی است.',
            'consultant_id.required' =>'انتخاب پزشک الزامی است.',
            'topic_id.required' =>'انتخاب موضوع الزامی است.'
        ];
    }

}
