<?php

namespace App\Http\Controllers\log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class logController extends Controller
{
    //
    public function logDemo(Request $request)
    {
        $logTime = now()->toTimeString();
        $ipAddress = $request->ip();
        // echo "This is log demo controller";
        Log::info('This is an info log message from logDemo method. ', [
            'logTime' => $logTime,
            'UserIpAddress' => $ipAddress
        ]);
    }


    public function userProcess(Request $request)
    {
        $logTime = now()->toTimeString();
        $ipAddress = $request->ip();
        Log::info('User process started.');
        $this->createUser($ipAddress, []);
        Log::info('Start User profile create process.');
        $this->profileCreate($ipAddress, []);
        Log::info('Start User payment account create process.');
        $this->paymentAccountCreate($ipAddress, []);


    }



    public function createUser($ipAddress, $data)
    {
        $logTime = now()->toTimeString();
        Log::info("Created a new user from ip: $ipAddress at $logTime");

    }

    public function profileCreate($ipAddress, $data)
    {
        $logTime = now()->toTimeString();
        Log::info("Created  user profile from ip: $ipAddress at $logTime");

    }

    public function paymentAccountCreate($ipAddress, $data)
    {
        $logTime = now()->toTimeString();
        Log::error("user account information not provided.");


    }
}
