@extends('layouts.main')

@section('content')
<h1>Créer un client</h1>
<form method="POST" action="{{ route('clients.store') }}">
    @csrf
    <label>Nom:</label>
    <input type="text" name="nom">
    <button type="submit">Créer</button>
</form>
@endsection
