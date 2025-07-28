@extends('layouts.main')

@section('content')
<h1>Visualiser un produit </h1>

<!--
<form method="POST" action="{{ route('produits.store') }}">
    @csrf
  <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nom" placeholder="Nom ou Raison Sociale">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="code" placeholder="Code Article">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="description" placeholder="description">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Prix de Vente TTC</label>
    <div class="col-sm-10">
      <input type="number" step="0.01" class="form-control" name="prix_vente_ttc"  placeholder="Prix de vente">
    </div>
  </div>
  <div class="form-group row">
    <label for="code" class="col-sm-2 col-form-label">Stock initial</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="stock"  placeholder="Stock initial">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
  </div>
</form>
-->


<p>Nom: <b> {{ $produit->nom }}</b></p>
<p>Code: <b> {{ $produit->code }}</b></p>
<p>Description: <b> {{ $produit->description }}</b></p>
<p>Prix de vente: <b> {{ $produit->prix_vente_ttc }}</b></p>
<p>Stock: <b> {{ $produit->stock }}</b></p>
<a href="{{ route('produits.index') }}">Retour</a>
<a href="{{ route('produits.edit', $produit->id) }}">Modifier</a>
<a href="{{ route('produits.destroy', $produit->id) }}" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')">Supprimer</a>
<a href="{{ route('produits.create') }}">Créer un produit</a>
@endsection 
