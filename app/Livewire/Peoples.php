<?php

namespace App\Livewire;

use App\Models\Friend;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Peoples extends Component
{
    public $search;

    public function addFriend($id)
    {
        $user = User::where('uuid', $id)->first();

        DB::beginTransaction();
        try {
            Friend::create([
                'user_id' => auth()->user()->id,
                'friend_id' => $user->id
            ]);

            Notification::create([
                'type' => 'friend_request',
                'user_id' => $user->id,
                'sender_id' => auth()->user()->id,
                'message' => auth()->user()->username . ' send you friend request.',
                'url' => '#'
            ]);

            DB::commit();
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }

    public function removeFriend($id)
    {
        $user = User::where('uuid', $id)->first();

        DB::beginTransaction();
        try {
            Friend::where([
                'user_id' => auth()->user()->id,
                'friend_id' => $user->id
            ])->first()->delete();

            Notification::create([
                'type' => 'friend_request',
                'user_id' => $user->id,
                'sender_id' => auth()->user()->id,
                'message' => auth()->user()->username . ' canceled friend request.',
                'url' => '#'
            ]);

            DB::commit();
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }

    public function render()
    {
        $users = User::whereNotIn('id', [auth()->user()->id])
            ->where('username', 'like', '%' . $this->search . '%')
            ->paginate(10, [
                'id',
                'uuid',
                'profile',
                'first_name',
                'last_name',
                'username',
            ]);

        return view('livewire.peoples', [
                'users' => $users,
                'pagination' => $users->links()
            ])->extends('layouts.app');
    }
}
