<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Friend;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Home extends Component
{
    public $comment;

    public function saveComment($post_id)
    {
        $this->validate([
            'comment' => 'required|string'
        ]);

        DB::beginTransaction();
        try {
            Comment::firstOrCreate([
                'post_id' => $post_id,
                'user_id' => auth()->user()->id,
                'comment' =>$this->comment
            ]);
            $post = Post::findOrFail($post_id);
            $post->comments += 1;
            $post->save();

            DB::commit();
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
        unset($this->comment);
    }


    public function like($id)
    {
        DB::beginTransaction();
        try {
            Like::firstOrCreate([
                'post_id' => $id,
                'user_id' => auth()->user()->id,
            ]);
            $post = Post::findOrFail($id);
            $post->likes += 1;
            $post->save();

            DB::commit();
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }

    public function dislike($id)
    {
        DB::beginTransaction();
        try {
            $like = Like::where([
                'post_id' => $id,
                'user_id' => auth()->user()->id,
            ]);
            $like->delete();
            $post = Post::findOrFail($id);
            $post->likes -= 1;
            $post->save();

            DB::commit();
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }



    public function render()
    {
        $friends = Friend::where(function($query) {
            $query->where('user_id', auth()->user()->id)
                ->where('status', 'accepted');
        })->orWhere(function($query) {
            $query->where('friend_id', auth()->user()->id)
                ->where('status', 'accepted');
        })->get();

        $friendIds = $friends->pluck('user_id')->merge($friends->pluck('friend_id'))->unique()->toArray();

        $friendIds[] = auth()->user()->id;

        $posts = Post::whereIn('user_id', $friendIds)
            ->with('user')
            ->latest()
            ->paginate(20);

        return view('livewire.home', [
            'posts' => $posts
        ])->extends('layouts.app');
    }
}
