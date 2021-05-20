<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function get(){

        $contacts = User::all();

        return response()->json($contacts);
    }

    public function getMessageFor($id){

        $messages = Message::where('from', $id)->orWhere('to', $id)->get();

        return response()->json($messages);
    }
}
