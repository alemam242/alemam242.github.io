<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TestController extends Controller
{
    function setMailFromAddress(Request $request)
{
    
    $email = $request->email;
    // env('MAIL_FROM_ADDRESS', $email);
    Config::set('app.MAIL_FROM_ADDRESS', $email);



    return response()->json(['message' => env('MAIL_FROM_ADDRESS')]);
}
}
