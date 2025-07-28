<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Client;
class HelloWorld extends Component
{
    public $name;
    public $names;
    public array $clients = [];
    public function mount(Request $request, $name ='none')
    {
        $this->name = $name ?? $request->name;
        $this->names = ['John', 'Jane', 'Jim'];
        $this->clients = Client::all()->toArray();
    }
    function refreshChildren()  {
        $this->dispatch('refreshChildren');
    }
    public function render()
    {
        return view('livewire.hello-world');
    }
}
