@extends('layouts.main')

@section('content')
<h1>{{ $title }}</h1>

<a href="{{ route($m_create)    }}">
    <img src="{{ asset('images/gif/inserer.png') }}"    
    alt="Ajouter" title="Ajouter" width="30" height="30" 
    style="cursor: pointer; margin-right: 10px;">
</a>
<div class="container">
{!! \Livewire\Livewire::mount($m_livewire) !!}
</div>

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

@endsection

