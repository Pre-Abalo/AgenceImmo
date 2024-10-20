<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css'])
        <title>@yield('title') | AgenceImmo</title>
    </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">AgIm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('property.index') }}">Les biens</a>
                </li>
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2 border-0 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light rounded-pill" type="submit">Search</button>
            </form>
        </div>
    </nav>



    @yield('body')

        @vite(['ressources/js/app.js'])
    </body>
</html>
