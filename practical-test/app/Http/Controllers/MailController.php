<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use Mail;

use App\Mail\DemoMail;

  

class MailController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        $mailData = [

            'name' => 'Lucian ',

            'message' => 'sending mail via gmail'

        ];

         

        Mail::to('lucian.boatright@gmail.com')->send(new DemoMail($mailData));

           

        dd("Email is sent successfully.");

    }

}