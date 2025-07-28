@extends('layouts.main')

@section('content')
<h1>Visualiser un client </h1>
<p>Nom: {{ $client->nom }}</p>
<p>Email: {{ $client->email }}</p>
<p>Téléphone: {{ $client->telephone }}</p>
<p>Adresse: {{ $client->adresse }}</p>
<a href="{{ route('clients.index') }}">Retour</a>
<a href="{{ route('clients.edit', $client->id) }}">Modifier</a>
<a href="{{ route('clients.destroy', $client->id) }}" onclick="return confirm('Voulez-vous vraiment supprimer ce client ?')">Supprimer</a>
<a href="{{ route('clients.create') }}">Créer un client</a>

@endsection 