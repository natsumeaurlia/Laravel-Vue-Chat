<?php

namespace App\Domain;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Events\ChatEvent;

class ChatSendDomain
{
    // public function send(Request $request)
    // {
    //     $user = Auth::user();

    //     $message = $request->message;

    //     event(new ChatEvent($message, $user));
    // }
    public function send()
    {
        $user = Auth::user();
        $message = 'Hello';

        event(new ChatEvent($message, $user));
    }
}
