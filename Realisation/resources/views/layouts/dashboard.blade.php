<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page - @yield('title', 'Dashboard')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        @yield('content')
    </div>
</body>
</html>
