<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailQueueController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mail-queue', [MailQueueController::class, 'index'])->name('mail.queue.index');
Route::post('/mail-queue/send', [MailQueueController::class, 'sendMail'])->name('mail.queue.send');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
