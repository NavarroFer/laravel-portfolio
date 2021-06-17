<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesContnroller extends Controller
{
    public function store(){

        $name = request('name');
        $email = request('email');
        $content = request('content');
        $subject = request('subject');

        //tambien se puede usar como parametro Request request
        //y $name = request->get('name');

        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3',
        ],[
            'name.required' => __('I need your name')
        ]);

        return 'Datos validados';
    }
}
