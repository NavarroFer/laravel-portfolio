<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageContnroller extends Controller
{
    public function store(){

        //tambien se puede usar como parametro Request request
        //y $name = request->get('name');

        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ],[
            'name.required' => __('I need your name')
        ]);

        Mail::to('fernavarro2607@gmail.com')->queue(new MessageReceived($msg));
        //queue, se hace en segundo plano

        return back()->with('status', 'Recibimos tu mensaje, te responderemos pronto.');
    }
}
