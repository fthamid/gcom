@extends('layouts.main')

@section('content')
<div class="container"> 
    <h1>{{ $title }}</h1>
    <div>
        <a href="#createModal" data-bs-toggle='modal' data-bs-target='#createModal'>
        <img src="{{ asset('images/gif/inserer.png') }}"    
        alt="Ajouter" title="Ajouter" width="30" height="30" 
        style="cursor: pointer; margin-right: 10px;">
        </a>
    </div>
    <div class="container">
        {!! \Livewire\Livewire::mount($m_livewire) !!}
        </div>
        <div class="col-md-4 ">
            <input type="text" class="form-control" wire:model.debounce.500ms="search" placeholder="Rechercher">
        </div>
        <div>
        <table class="table table-striped">
            <caption>
                {{ $title }} -
            </caption>
            <thead>
                <tr>
                    @foreach(  $headers  as $header)
                        <th scope="col">{{ $header }}</th>
                    @endforeach
                <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach(  $table  as $row)
                <tr>
                @foreach(  $fields  as $col)
                    <td>{{ $row->$col }}</td>
                @endforeach
                <td><a href="{{ route($m_edit, $row) }}">
                    <img src="{{ asset('images/gif/edit.gif') }}" 
                            alt="Éditer" title="Éditer" width="20" height="20" style="cursor: pointer;">
                    </a>
                </td>
                <td><a href="{{ route($m_show, $row) }}">
                    <img src="{{ asset('images/gif/view.gif') }}" 
                    alt="Visualiser" title="Visualiser" width="20" height="20" style="cursor: pointer;">
                    </a>
                </td>
                <td>
                    <a href="{{ route($m_destroy, $row) }}" 
                        onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">
                        <img src="{{ asset('images/gif/delete.gif') }}" 
                        alt="Supprimer" title="Supprimer" width="20" height="20" style="cursor: pointer;">
                    </a>
                </td>
                </tr>
            @endforeach
        
            </tbody>
            
        </table>
        <table class="table table-striped">
                <tr>
                    <td colspan="3">
                        <div class="row">
                            
                            <div class="col-md-4">
                                <select class="form-control" wire:model.live="perPage">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select wire:model="sortDirection">
                                    <option value="asc">Ascendant</option>
                                    <option value="desc">Descendant</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <select class="form-control" wire:model.live="sortBy">
                            <option value="nom">Nom</option>
                            <option value="email">Email</option>
                            <option value="telephone">Téléphone</option>
                            <option value="adresse">Adresse</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" wire:model.debounce.500ms="search" placeholder="Rechercher">
                    </td>
                    <td></td>
                    <td></td>
                    <td colspan="{{ count($headers) + 3 }}">  {{ $table->links() }}  </td>  
                </tr>
        </table>
    </div>
</div>
@endsection

