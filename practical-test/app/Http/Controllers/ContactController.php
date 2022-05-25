<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request){
        // $request->validate([
        //     'name'->'required',
        //     'email'->'required|email',
        //     'subject'->'request',
        //     'message'->'required'
        // ]);

        if($this->isOnline()){
            return "Connected";
        } else{
            return "No Connection";
        }
    }
}
