@extends('base')

@section('title', 'Accueil')


@section('body')

    <div class="bg-light p-5 mt-5 text-center">
        <div class="cointainer">
            <h1 class="text-success text-5xl fw-bolder mb-5">Agence AgIm</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur debitis, distinctio dolor
                error nihil perspiciatis voluptas voluptatum. Culpa eaque earum, et expedita id incidunt libero minima nesciunt
                consequuntur corporis cupiditate debitis delectus deleniti dicta dignissimos dolores ducimus earum et exercitationem
                facilis impedit inventore iure laborum libero molestias nemo nobis non numquam obcaecati possimus quae quam quo
                rerum sed sequi sint suscipit tempora ullam ut vero? Excepturi mollitia nihil sint tempora?
            </p>
        </div>
    </div>

    <div class="container">
        <h1 class="text-success text-3xl fw-bold">Nos derniers biens</h1>

        <div class="row">
            @foreach($properties as $property)
                <div class="col p-3">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>

@endsection
