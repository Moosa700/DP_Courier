<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
      $agents = User::where('user_type','agent')->get();
        $messages = '';
        $user = '';
        return view('admin.pages.message.index',compact('agents','messages', 'user'));
    }

    public function send(Request $request)
    {
        Message::create([
            'from' => 4,
            'to' => $request->reciver_id,
            'message' => $request->message,
        ]);
        $user = User::where('id',$request->reciver_id)->first();
        $messages = Message::where('from',$request->reciver_id)->orWhere('to',$request->reciver_id)->get();
        $agents = User::where('user_type','agent')->get();

        return view('admin.pages.message.index',compact('agents','messages', 'user'));

    }

    public function show_messages($id)
    {
        $user = User::where('id',$id)->first();
        $messages = Message::where('from',$id)->orWhere('to',$id)->get();
        $agents = User::where('user_type','agent')->get();

        return view('admin.pages.message.index',compact('messages','user','agents'));
    }
}
