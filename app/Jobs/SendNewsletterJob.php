<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Mail as MailModal;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Models\Newsletter;

class SendNewsletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
    */
    public static function handle(): void
    {
        $newsletters = Newsletter::all();
        $emails = MailModal::all();
        foreach ($emails as $email) {
            foreach ($newsletters as $newsletter) {
                $mailData = [
                    'title' => $newsletter->name,
                    'body' => $newsletter->message
                ];
                Mail::to($email->email)->send(new DemoMail($mailData));
            }
        }
    }
}
