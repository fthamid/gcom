@extends('layouts.main')

@section('content')
<h1>Éditer le client</h1>
<form method="POST" action="{{ route('clients.update', $client) }}">  
  @csrf @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" name="nom" placeholder="Nom du client" value="{{ $client->nom }}"/>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $client->email }}">
    </div>
  </div>
  <div class="form-group">
    <label for="telephone">Téléphone</label>
    <input type="text" class="form-control" name="telephone" placeholder="Téléphone" value="{{ $client->telephone }}">
  </div>
  <div class="form-group">
    <label for="adresse">Addresse</label>
    <textarea name="adresse" id="adresse" class="form-control" placeholder="Adresse du client"  rows="3" cols="50">{{ $client->adresse }}</textarea>
  </div>
  
  <button type="submit" class="btn btn-warning">Mettre à jour</button>
    <a href="{{ route('clients.index') }}">Retour</a>
    <a href="{{ route('clients.show', $client->id) }}">Visualiser</a>
    <a href="{{ route('clients.destroy', $client->id) }}" onclick="return confirm('Voulez-vous vraiment supprimer ce client ?')">Supprimer</a>  
    <a href="{{ route('clients.create') }}">Créer un client</a>
</form>

<!--
<form method="POST" action="{{ route('clients.update', $client) }}">
    @csrf @method('PUT')
    <label>Nom:</label><input type="text" name="nom" value="{{ $client->nom }}"><br>
    <label>Email:</label><input type="email" name="email" value="{{ $client->email }}"><br>
    <label>Téléphone:</label><input type="text" name="telephone" value="{{ $client->telephone }}"><br>  
    <label>Adresse:</label><input type="text" name="adresse" value="{{ $client->adresse }}"><br>    
    <button type="submit">Mettre à jour</button>
    <a href="{{ route('clients.index') }}">Retour</a>
    <a href="{{ route('clients.show', $client->id) }}">Visualiser</a>
    <a href="{{ route('clients.destroy', $client->id) }}" onclick="return confirm('Voulez-vous vraiment supprimer ce client ?')">Supprimer</a>  
    <a href="{{ route('clients.create') }}">Créer un client</a>
</form>
-->
@endsection
