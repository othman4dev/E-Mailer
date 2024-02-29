<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmail extends Controller
{   
    public function index() {
        $data['text'] = "We are learning laravel 10 mail from laravelia.com";
        $data['email'] = 'rabiaaitimghi7@gmail.com';
        dispatch(new \App\Jobs\LaravelQueueMailJob($data));
    
        dd('Mail send successfully.');
    }
}
