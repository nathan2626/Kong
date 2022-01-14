<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{

    protected $listeners = ['echo:comments,CommentAdded' => 'commentAdded'];

    public $comments;

    public function commentAdded($comment)
    {
        $this->comments->prepend(Comment::find($comment['id']));

        session()->flash('status', "Commentaire Ajouté");
    }

    public function mount()
    {
        $this->comments = Comment::latest()->get();
        
    }

    public function render()
    {
        return view('livewire.comments');
    }

    
}
