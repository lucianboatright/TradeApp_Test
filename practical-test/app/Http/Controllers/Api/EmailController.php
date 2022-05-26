<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public $token;

    @return void

    public function __construct($token)

    {
        $this->token = $token;
    }
    
    @return

    public function build()
    {
        return $this->subject()->view('messageForm')
    }

}
