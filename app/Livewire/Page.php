<?php

namespace App\Livewire;

use App\Models\Friend;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class Page extends Component
{
    public $uuid;
    public $user;
    public $postsCount;
    public $friendsCount;
    public $posts;

    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $this->user = User::where('uuid', $this->uuid)->first();

        $this->postsCount = Post::where('user_id', $this->user->id)->count();

        $this->friendsCount = Friend::where(function($query) {
            $query->where('user_id', auth()->user()->id)
                ->where('status', 'accepted');
        })->orWhere(function($query) {
            $query->where('friend_id', auth()->user()->id)
                ->where('status', 'accepted');
        })->count();

        $this->posts = Post::where('user_id', $this->user->id)->latest()->get();
    }

    public function render()
    {
        return view('livewire.page', [
            'user' => $this->user,
            'postsCount' => $this->postsCount,
        ])->extends('layouts.app');
    }
}
