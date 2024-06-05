<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class PostComments extends Component
{
    public $postComments;
    public $post_id;

    public function mount($post_id)
    {
        $this->post_id = $post_id;
        $this->postComments = Comment::where('post_id', $post_id)
            ->where('status', 'published')
            ->get();
    }


    public function render()
    {
        return view('livewire.post-comments');
    }
}
