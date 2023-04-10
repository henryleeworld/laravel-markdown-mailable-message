<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\InfoMail;
use Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $email = 'henryleeworld@gmail.com';
        $info = [
            'title' => __('Rare Pikachu, Kobe’s sneakers — a hidden vault guards it all'),
            'url' => 'https://features.ltn.com.tw/english/article/paper/1573624'
        ];
        Mail::to($email)->send(new InfoMail($info));
        dd(__('Mail Send Successfully'));
    }
}
