<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
class ClientList extends Component
{
    public $search = '';
    public $sortBy = 'nom';
    public $sortDirection = 'asc';
    public $perPage = 10;
    
    public function render()    
    {
        return view('livewire.client-list', [ 'clients' => Client::search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage)]);
    }
}
#==============

@livewire('client-list')
