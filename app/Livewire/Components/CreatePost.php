<?php

namespace App\Livewire\Components;

use App\Models\Post;
use App\Models\PostMedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $content;
    public $images = [];
    public $video;
    public $video_file_name;

    public function render()
    {
        return view('livewire.components.create-post');
    }

    public function createpost()
    {
        $this->validate([
            'content' => 'required|string'
        ]);


        DB::beginTransaction();

        try {
            $post = Post::create([
                'uuid' => Str::uuid(),
                'user_id' => auth()->user()->id,
                'content' => $this->content,
            ]);

            if ($this->images) {
                foreach ($this->images as $image) {
                    $images[] = $image->store('posts/image', 'public');
                }

                PostMedia::create([
                    'post_id' => $post->id,
                    'file_type' => 'image',
                    'file' => json_encode($images),
                    'position' => 'general'
                ]);

            }

            if ($this->video) {
                $video_file_name = $this->video->store('posts/video', 'public');
                PostMedia::create([
                    'post_id' => $post->id,
                    'file_type' => 'video',
                    'file' => $video_file_name,
                    'position' => 'general'
                ]);
            }

            DB::commit();

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }


        unset($this->content);
        unset($this->images);
        unset($this->video);

        return redirect()->route('home');

    }
}
