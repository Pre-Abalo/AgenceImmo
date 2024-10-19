<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])
    <title>@yield('title') | Administration -AGIM</title>
</head>
<body>

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @yield('body')
</div>
@vite(['ressources/js/app.js'])
</body>
</html>
