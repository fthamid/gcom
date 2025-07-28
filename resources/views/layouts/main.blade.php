 
<!DOCTYPE html> 
<html lang="fr-FR">
<head>
    <title>Unimtatel GCOM</title>
    @livewireStyles
    @section('head')
        @include('includes.head')
    @show
</head>

<body>
   
    <header>
        @section('header')
            @include('includes.header') 
        @show
    </header>
    
    <div class="container.container-fluid" style="display:flex; flex-direction:column; height:100vh;">
        <main>
            @yield('content')
        </main>
    </div>
   
    <footer>
        @section('footer')
            @include('includes.footer')
        @show
    </footer>
    @livewireScripts
</body>
</html>
