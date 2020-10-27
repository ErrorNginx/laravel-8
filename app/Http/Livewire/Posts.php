<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $posts;
    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }
}
