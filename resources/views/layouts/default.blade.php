
<!DOCTYPE html>
<html>
<head>
    @include('includes.head',['menu' => $menu])
</head>
<body>
    <header>
        @include('includes.header',['menu' => $menu])
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('includes.footer',['menu' => $menu])
    </footer>
</body>
</html>
