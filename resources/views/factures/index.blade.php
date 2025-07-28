@extends('layouts.main')

@section('content')
<h1>Liste des clients</h1>
<a href="{{ route('clients.create') }}">Ajouter un client</a>

<ul>
    @foreach($clients as $client)
        <li>{{ $client->nom }} -
            <a href="{{ route('clients.edit', $client) }}">Éditer</a> |
            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button>Supprimer</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
