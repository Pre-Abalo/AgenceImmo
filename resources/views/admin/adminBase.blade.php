<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])
    <title>@yield('title') | Administration -AGIM</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-success text-5xl fw-bolder" href="#">AgIm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-success" aria-current="page" href="{{ route('admin.property.index') }}">Gestion des Biens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.option.index') }}">Gestion des Options</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Autre Option</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('body')

</div>
@vite(['ressources/js/app.js'])
</body>
</html>
