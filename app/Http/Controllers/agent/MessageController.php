<?php

namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index($id)
    {
        $messages = Message::where('from',$id)->orWhere('to',$id)->get();

        return view('admin.pages.message.index',compact('messages'));

    }
}
