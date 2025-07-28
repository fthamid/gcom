<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\On;
use App\Models\Client;
class SayHi extends Component
{
    public array $client;
    public $name;
    public $greeting ;
    public $loud = false;
    public $greetings = ['Hello', 'Hi', 'Hey'];

    protected $listeners = ['refreshChildren' => 'refresh'];

    //#[On('refreshChildren')]
    public function refreshMe()
    {
      //  $this->client = Client::all()->toArray();
    }
    public function mount(Request $request, $client, ?string $name ='default_name', ?string $greeting = 'Hello' , ?bool    $loud = true)
    {
        $this->name = $name ?? $request->name;
        $this->greeting = $greeting ?? $this->greetings[array_rand($this->greetings)];
        $this->loud = $loud ;
        $this->client = $client;
    }
    public function resetName($name = 'Default_name')
    {
        $this->name = $name;
    }
    /*
    public function updated($property)
    {
        $this->name = strtoupper($this->name);
    }
    public function updatedName()
    {
        $this->name = strtoupper($this->name);
    }   
    public function hydrate()
    {
        $this->name = strtoupper($this->name);
    }   
        */

    public function render()
    {
        return view('livewire.say-hi');
    }
}
