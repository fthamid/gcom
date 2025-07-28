<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $data = 'Hello World';
    
    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function resetCounter()
    {
        $this->count = 10;
    }
    public function incrementBy10() {
        $this->count += 10;
    }
    public function decrementBy10() {
        $this->count -= 10;
    }
    public function resetBy10() {
        $this->count = 10;
    }
    public function incrementBy100() {
        $this->count += 100;
    }
    public function decrementBy100() {
        $this->count -= 100;
    }
    public function resetBy100() {
        $this->count = 100;
    }
    public function incrementBy1000() {
        $this->count += 1000;
    }
    public function decrementBy1000() {
        $this->count -= 1000;
    }
    public function resetBy1000() {
        $this->count = 1000;
    }
    public function incrementBy10000() {
        $this->count += 10000;
    }
    public function decrementBy10000() {
        $this->count -= 10000;
    }
    public function resetBy10000() {            
        $this->count = 10000;
    }
    public function incrementBy100000() {
        $this->count += 100000;
    }
    public function decrementBy100000() {
        $this->count -= 100000;
    }
    public function resetBy100000() {
        $this->count = 100000;
    }
    public function render()
    {
        return view('livewire.counter');
    }

}
