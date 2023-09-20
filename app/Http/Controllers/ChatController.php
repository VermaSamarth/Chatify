<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //
    public function display_chat(){
        $contacts = contact::where('user_id_1',Auth::user()->id)->get();
        $chats = message::where('member_1',Auth::user()->id)->where('member_2','2')->get();
        return view('chats',['contacts'=>$contacts,'chats'=>$chats]);
    }

    public function open_chat($id){
        $contacts = contact::where('user_id_1',Auth::user()->id)->get();
        $chats = message::where('member_1',Auth::user()->id)->where('member_2',$id)->get();
        // dd($chats);
        return view('chats',['chats'=>$chats]);
    }

    public function new_chat(){
        return view('new_chat');
    }
}
