<?php

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
            'title' => __('Study of polyglots offers insight on brain’s language processing'),
            'url' => 'https://features.ltn.com.tw/english/article/paper/1637228'
        ];
        Mail::to($email)->send(new InfoMail($info));
        dd(__('Mail Send Successfully'));
    }
}
