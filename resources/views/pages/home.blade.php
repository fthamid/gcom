@extends('layouts.main')


@section('content')
<!-- <h4>{{ request()->path() }}</h4> -->   
<h1>Welcome <b>{{ $name }}</b> to the Home Page</h1>
  
    <h1 class="text-3xl font-bold underline">   
        This content is unique to the home page.
       
    </h1>

@endsection