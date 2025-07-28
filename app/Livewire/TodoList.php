<?php

namespace App\Livewire;
 
use Livewire\Component;
 
class TodoList extends Component
{
    public $todos = [];
    public $pultodos = [];
    public $todo = '';
 
    public function add()
    {
        $this->todos[] = $this->todo;

        $this->pultodos[] = $this->pull('todo'); 
        $this->todo = '';
    }
    public function todoReset() {
        $this->pull(); //reset
        $this->pull(['title', 'content']);
    }
 
    // ...
}