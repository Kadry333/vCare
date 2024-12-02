<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ContactController extends Controller implements HasMiddleware
{
    public static function middleware():array
    {
     return [
        new middleware('AdminArea',only:['Send_Message'])
     ];
    }
    public function index()
    {
        return view('front.contact');
    }
    public function Send_Message(Request $request)
    {
        //validation
        $request->validate(
            [
                "name"=>["required","string","min:3","max:50"],
                "email"=>["required","email"],
                "subject"=>["required","min:3","max:50","string"],
                "message"=>["required","min:10","max:200"]
            ]
            );
       //connet to DB
       $message = new Message;
       $message->name = $request->name;
       $message->subject = $request->subject;
       $message->email = $request->email;
       $message->message = $request->message;
       $message->save();
       return redirect('contact')->with('success','Your Message Has Benn Sent Successfully');

    }
}
