@extends('layouts.listing',
[   'title'     => 'Liste des clients',
    'headers'   => ['Nom', 'Email', 'Téléphone', 'Adresse'],
    'fields'    => ['nom', 'email', 'telephone', 'adresse'],
    'table'     => $clients,  
    'm_create'  => 'clients.create' ,
    'm_edit'    => 'clients.edit' , 
    'm_show'    => 'clients.show',
    'm_destroy' => 'clients.destroy',
    'm_livewire' => 'cr-test'
])
