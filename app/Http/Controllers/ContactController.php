<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
        public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

$data = [
    'name'    => $request->name,
    'email'   => $request->email,
    'user_message' => $request->message,
];

Mail::send('emails.contact', $data, function($msg) {
    $msg->to('info.siloamict@gmail.com')
        ->subject('New Contact Message');
});


        return back()->with('success', 'Your message has been sent!');
    }
}
