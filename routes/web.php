<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestController;



Route::get('/', function () {
    return view('pages.hero');
});

Route::view('/email','email.message');

Route::post("/download",[CVController::class, "downloadCV"])->name('downloadCV');

Route::post("/sendEmail",[MailController::class, "sendEmail"])->name('sendEmail');