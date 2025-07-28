@extends('layouts.main')

@section('content')
<h1>Modifier le produit</h1>
<form method="POST" action="{{ route('produits.update', $produit) }}">
@csrf @method('PUT')
    <label>Nom:</label><input type="text" name="nom" value="{{ $produit->nom }}"><br>
    <label>Code:</label><input type="text" name="code" value="{{ $produit->code }}"><br>
    <label>Prix de vente:</label><input type="number" step="0.01" name="prix_vente" value="{{ $produit->prix_vente }}"><br>
    <label>Stock:</label><input type="number" name="stock" value="{{ $produit->stock }}"><br>
    <button type="submit">Mettre à jour</button>
    <a href="{{ route('produits.index') }}">Retour</a>
    <a href="{{ route('produits.show', $produit) }}">Visualiser</a>
    <a href="{{ route('produits.destroy', $produit) }}" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</a>
    <a href="{{ route('produits.create') }}">Ajouter un produit</a>
</form>
@endsection
