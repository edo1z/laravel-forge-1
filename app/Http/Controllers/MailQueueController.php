<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMailJob;

class MailQueueController extends Controller
{
    public function index()
    {
        return view('mail-queue.index');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'content' => 'required|string',
        ]);

        SendMailJob::dispatch($request->email, $request->content);

        return back()->with('status', 'メールがキューに追加されました！');
    }
}