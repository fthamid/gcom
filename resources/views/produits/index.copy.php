@extends('layouts.main')

@section('content')
<h1>Liste des produits</h1>
<a href="{{ route('produits.create') }}">
    <img src="{{ asset('images/gif/inserer.png') }}"    
    alt="Ajouter" title="Ajouter" width="30" height="30" 
    style="cursor: pointer; margin-right: 10px;">
</a>
<table class="table table-striped">
        <caption>
            Liste des produits
        </caption>
        <thead>
            <tr>
            <th scope="col">Code</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Prix</th>
            <th scope="col">Stock</th>
            <th scope="col" colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach($produits as $produit)
        <tr>
            <th scope="row">{{ $produit->code }}</th>
            <td>{{ $produit->nom }}</td>
            <td>{{ $produit->description }}</td>
            <td>{{ $produit->prix_vente_ttc }}</td>
            <td>{{ $produit->stock }}</td>
            <td><a href="{{ route('produits.edit', $produit) }}">
                <img src="{{ asset('images/gif/edit.gif') }}" 
                     alt="Éditer" title="Éditer" width="20" height="20" style="cursor: pointer;">
                </a>
            </td>
            <td><a href="{{ route('produits.show', $produit) }}">
                <img src="{{ asset('images/gif/view.gif') }}" 
                alt="Visualiser" title="Visualiser" width="20" height="20" style="cursor: pointer;">
                </a>
            </td>
            <td>
                <a href="{{ route('produits.destroy', $produit) }}" 
                    onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">
                    <img src="{{ asset('images/gif/delete.gif') }}" 
                    alt="Supprimer" title="Supprimer" width="20" height="20" style="cursor: pointer;">
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>

@endsection

