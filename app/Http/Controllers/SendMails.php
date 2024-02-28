<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendNewsletterJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
class SendMails extends Controller
{
    public function send(){
        // SendNewsletterJob::handle();
        $mailData = [
            'title' =>  "Newsletter",
            'body' => "nnnnnnnnnnnnn"
        ];
        Mail::to("speedfly2003@gmail.com")->send(new DemoMail($mailData));
        dd("pk");
    }
}
