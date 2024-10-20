@extends('base')

@section('title', 'Tous nos biens')

@section('body')

    <div class="bg-light p-5 mt-5 text-center">
        <form action="" class="container d-flex gap-2" method="get">
            <input type="number" placeholder="Budget max" name="price" value="{{ $input['price'] ?? '' }}" class="form-control">
            <input type="number" placeholder="Surface min" name="surface" value="{{ $input['surface'] ?? '' }}" class="form-control">
            <input type="number" placeholder="Nombre de pièces min" name="rooms" value="{{ $input['rooms'] ?? '' }}" class="form-control">
            <input type="text" placeholder="Ville" name="city" value="{{ $input['city'] ?? '' }}" class="form-control">
            <input type="text" placeholder="Mot clé" name="title" value="{{ $input['title'] ?? '' }}" class="form-control">
            <button class="btn btn-primary bt-sm flex-grow-0">
                Rechercher
            </button>
        </form>

        <form action="" class="d-flex gap-2" method="get">
            {{ $input = null }}
            <button class="btn btn-warning bt-sm flex-grow-0">
                Réinitialiser
            </button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            @forelse($properties as $property)
                <div class="col-3 p-3">
                    @include('property.card')
                </div>
            @empty
                <div class="text-center">
                    <h1 class="text-warning text-6xl">Hmmm !</h1>
                    <h1 class="text-5xl">
                        Aucun bien ne correspond à vos critères de recherche
                    </h1>
                    <h1 class="text-6xl">:(</h1>
                </div>
            @endforelse
        </div>

        {{ $properties->links() }}
    </div>

@endsection
