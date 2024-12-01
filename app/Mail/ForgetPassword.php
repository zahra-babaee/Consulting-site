<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;
    private $link;
    public function __construct($link)
    {
        $this->link=$link;
    }

    public function build()
    {
        return $this->subject('فراموشی رمزعبور')
        ->view('mail.forget_password',[
            'link'=> $this->link
        ]);
    }
}
