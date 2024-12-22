<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send('emails.contact', $data, function(Message $message) use ($data) {
            $message->to('test2@cyyc.lol', 'Receiver')->subject('New message from: '.$data['email']);
        });

        return redirect('/')->with('success', 'Your message has been sent.');
    }
}