<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Minimaliste')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('partials.flash-message')

    <main>
        @yield('content')
    </main>

    <aside>
        @yield('sidebar')
    </aside>

</body>
</html>