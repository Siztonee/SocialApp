<?php

namespace App\Livewire;

use App\Models\Friend;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FriendRequests extends Component
{
    public $requests;

    public function acceptFriend($id)
    {
        $user = User::where('uuid', $id)->first();

        DB::beginTransaction();
        try {
            $forUpd = Friend::where([
                'user_id' => $user->id,
                'friend_id' => auth()->user()->id,
            ]);

            $forUpd->update([
                'status' => 'accepted',
                'accepted_at' => now()
            ]);

            Notification::create([
                'type' => 'friend_request',
                'user_id' => $user->id,
                'sender_id' => auth()->user()->id,
                'message' => auth()->user()->username . ' accepted your friend request.',
                'url' => '#'
            ]);

            DB::commit();
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }

        return redirect()->route('requests');

    }


    public function rejectFriend($id)
    {
        $user = User::where('uuid', $id)->first();

        DB::beginTransaction();
        try {
            $forUpd = Friend::where([
                'user_id' => $user->id,
                'friend_id' => auth()->user()->id
            ]);

            $forUpd->update([
                'status' => 'rejected',
            ]);

            Notification::create([
                'type' => 'friend_request',
                'user_id' => $user->id,
                'sender_id' => auth()->user()->id,
                'message' => auth()->user()->username . ' canceled your friend request.',
                'url' => '#'
            ]);

            DB::commit();
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }

        return redirect()->route('requests');

    }




    public function mount()
    {
        $this->requests = Friend::where('friend_id', Auth::id())
            ->where('status', 'pending')
            ->with('user')
            ->get();
    }

    public function render()
    {
        return view('livewire.friend-requests')->extends('layouts.app');
    }
}
