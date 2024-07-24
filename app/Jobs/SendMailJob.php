<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;
    public $content;

    public function __construct($email, $content)
    {
        $this->email = $email;
        $this->content = $content;
    }

    public function handle()
    {
        sleep(5);

        Mail::raw($this->content, function ($message) {
            $message->to($this->email)
                    ->subject('キューからのメール');
        });
    }
}