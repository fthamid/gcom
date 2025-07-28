<?php

namespace App\Livewire\Post;

use Livewire\Component;
use Livewire\Attributes\Title;

class Show extends Component
{
    #[Title('Show')] 
    public function render()
    {
        return view('livewire.post.show');
    }
}
