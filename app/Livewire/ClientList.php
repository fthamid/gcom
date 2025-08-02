<?php
namespace App\Livewire;


use Livewire\Component;
use App\Livewire\Url;
use App\Models\Client;

class ClientList extends Component
{
    #[Url(history:true)]
    public $search = '';
    public $sortBy = 'created_at';
    public $sortDirection = 'asc';
    public $perPage = 3;
    public $is_client ='';

    public function setSortBy($sortBy) {
        if($this->sortBy == $sortBy ) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc':'asc';
            return;
        } 
        $this->sortBy = $sortBy;
        $this->sortDirection = 'asc';
        
    }
    public function delete(Client $client) {
            $client->delete();
    }
    public function render()    
    {
        return view('livewire.client-list', [ 'clients' => Client::search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->when($this->is_client !== '', function($query) {
            $query->where('is_client', $this->is_client);
        })
        ->paginate($this->perPage)]);
    }
}


