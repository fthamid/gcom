@extends('layouts.main')
@section('content')
<h1>Éditer le client</h1>
<form method="POST" action="{{ route('clients.update', $client) }}">
    @csrf @method('PUT')
    <label>Nom:</label>
    <input type="text" name="nom" value="{{ $client->nom }}">
    <button type="submit">Mettre à jour</button>
</form>
@endsection
