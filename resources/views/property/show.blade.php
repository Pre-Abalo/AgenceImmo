@extends('base')

@section('title', $property->title)

@section('body')
<div class="container mt-4">
    <h1 class="text-5xl fw-bold">{{ $property->title }}</h1>
    <h2 class="text-3xl fw-bold">{{ $property->rooms }} pièces - {{ $property->surface }}m&sup2;</h2>

    <div class="text-primary fw-bold" style="font-size: 4rem;">
        {{ number_format($property->price, thousands_separator: ' ') }} €
    </div>

    <hr>

    <div class="mt-4">
        <h4 class="text-3xl">Interresé par ce bien ?</h4>
    </div>

    @include('shared.flash')

    <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-2">
        @csrf
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name' => 'firstname', 'label' => 'Prénom', 'value' => $fakerData['firstname']])
            @include('shared.input', ['class' => 'col', 'name' => 'lastname', 'label' => 'Nom', 'value' => $fakerData['lastname']])
        </div>
        <div class="row">
            @include('shared.input', ['type' => 'number', 'class' => 'col', 'name' => 'phone', 'label' => 'Téléphone', 'value' => $fakerData['phone']])
            @include('shared.input', ['type' => 'email', 'class' => 'col', 'name' => 'email', 'label' => 'Email', 'value' => $fakerData['email']])
        </div>
        @include('shared.input', ['type' => 'textarea', 'class' => 'col', 'name' => 'message', 'label' => 'Votre message', 'value' => $fakerData['message']])

        <div>
            <button class="btn btn-primary">Nous contacter</button>
        </div>
    </form>
</div>
<div class="container">
<div>
    <div class="mt-4 text-center">
        {!! nl2br($property->description) !!}
    </div>
</div>
    <div class="row">
        <div class="col-8">
            <h2 class="text-3xl fw-bold">Caractéristiques</h2>
            <table class="table table-striped table-success">
                <tr>
                    <td>Surface habitable</td>
                    <td>{{ $property->surface }}m&sup2;</td>
                </tr>
                <tr>
                    <td>Pièces</td>
                    <td>{{ $property->rooms }}</td>
                </tr>
                <tr>
                    <td>Chambres</td>
                    <td>{{ $property->bedrooms }}</td>
                </tr>
                <tr>
                    <td>Etage</td>
                    <td>{{ $property->floor ?: 'Rez de Chaussée' }}</td>
                </tr>
                <tr>
                    <td>Localisation</td>
                    <td>
                        {{ $property->address }}<br>
                        {{ $property->city }} ({{ $property->postal_code }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-4">
            <h2 class="text-3xl fw-bold">Spécificités</h2>
            <ul class="list-group">
                @if($property->options->isNotEmpty())
                    @foreach($property->options as $option)
                        <li class="list-group-item">
                            {{ $option->name }}
                        </li>
                    @endforeach
                @else
                    <li class="list-group-item text-center">Pas de spécificités particulières</li>
                @endif

            </ul>
        </div>

    </div>

</div>

@endsection
