<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
class CrTest extends Component
{
    public $nom = '';
    public $email = '';
    public $telephone = '';
    public $adresse = '';
    public function render()
    {
        return view('livewire.cr-test');
    }
    
 
    public function saveIt()
    {
        
        Client::create([
            'nom' => $this->nom,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'adresse' => $this->adresse,
        ]);
        
        $this->redirect('/clients');
    }
}
