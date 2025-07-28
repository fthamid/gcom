@extends('layouts.main')


@section('content')
<h1>Liste des clients</h1>
<a href="{{ route('clients.create') }}">Ajouter un client</a>
    <table class="table table-striped">
        <caption>
            Liste des clients
        </caption>
        <thead>
            <tr>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Adresse</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach($clients as $client)
        <tr>
            <th scope="row">{{ $client->nom }}</th>
            <td>{{ $client->email }}</td>
            <td>{{ $client->telephone }}</td>
            <td>{{ $client->adresse }}</td>
            <td><a href="{{ route('clients.edit', $client) }}">Éditer</a></td>
            <td><a href="{{ route('clients.show', $client) }}">Visualiser</a></td>
            <td><a href="{{ route('clients.destroy', $client) }}" onclick="return confirm('Voulez-vous vraiment supprimer ce client ?')">Supprimer</a></td>
        </tr>
    @endforeach
    </tbody>
    </table>
    
@endsection
