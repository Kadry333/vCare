<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact');
    }
    public function Send_Message(Request $request)
    {
       $message = new Message;
       $message->name = $request->name;
       $message->subject = $request->subject;
       $message->email = $request->email;
       $message->message = $request->message;
       $message->save();
       return redirect('contact')->with('success','Your Message Has Benn Sent Successfully');

    }
}
