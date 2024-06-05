<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Events\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getChats()
    {
        $friends = Friend::where(function($query) {
            $query->where('user_id', auth()->user()->id)->where('status', 'accepted');
        })->orWhere(function($query) {
            $query->where('friend_id', auth()->user()->id)->where('status', 'accepted');
        })->get();

        $friendIds = $friends->map(function($friend) {
            return $friend->user_id === auth()->user()->id ? $friend->friend_id : $friend->user_id;
        });

        $users = User::whereIn('id', $friendIds)->get();


        return view('chats-list', ['friends' => $users]);
    }



    public function chatWith($uuid)
    {
        return view('chat', ['uuid' => $uuid]);
    }
}
