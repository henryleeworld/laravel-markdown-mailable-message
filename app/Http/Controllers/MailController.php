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
            'title' => '日職》王柏融新賽季改穿「3號」 扛下前輩田中賢介背號',
            'url' => 'https://sports.ltn.com.tw/news/breakingnews/3004311'
        ];
        Mail::to($email)->send(new InfoMail($info));
        dd("Mail Send Successfully");
    }
}
