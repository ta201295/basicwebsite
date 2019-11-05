<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
       $this->validate($request,[
           'name' => 'required',
           'email' => 'required'
       ]);

      //Create New Message
      $message = new Message;

      $data = $request->all();
    //   dd($request->all());

      $message->name = $data['name'];
      $message->email = $data['email'];
      $message->message = $data['message'];

    //   dd($message);
      //Save Message
      $message->save();
    
      //Redirect
      return redirect('/')->with('success', 'Message Sent');
    }
    
    public function getMessages(){
      $messages = Message::all();

    return view('messages')->with('messages', $messages);

    }
}
