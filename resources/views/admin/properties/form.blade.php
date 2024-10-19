@extends('admin.adminBase')

@section('title', $property->exists ? 'Editer un bien' : 'Créer un bien')

@section('body')

    <h1 class="text-6xl">@yield('title')</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form class="vstack gap-2 mt-5" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property->exists ? ['property' => $property] : []) }}" method="post">
    @csrf
        @method($property->exists ? 'put' : 'post')
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name' => 'title', 'label' => 'Titre', 'value' => $property->title])
            <div class="col row">
                @include('shared.input', ['class' => 'col', 'name' => 'surface', 'value' => $property->surface])
                @include('shared.input', ['class' => 'col', 'name' => 'price', 'label' => 'Prix', 'value' => $property->price])
            </div>
        </div>
        @include('shared.input', ['class' => 'col', 'name' => 'description', 'type' => 'textarea', 'value' => $property->description])
        <div class="row">
        @include('shared.input', ['class' => 'col', 'name' => 'rooms', 'value' => $property->rooms])
        @include('shared.input', ['class' => 'col', 'name' => 'bedrooms', 'value' => $property->bedrooms])
        @include('shared.input', ['class' => 'col', 'name' => 'floor', 'value' => $property->floor])
        </div>
        <div class="row">
        @include('shared.input', ['class' => 'col', 'name' => 'address', 'label' => 'Adresse', 'value' => $property->address])
        @include('shared.input', ['class' => 'col', 'name' => 'city', 'label' => 'Ville', 'value' => $property->city])
        @include('shared.input', ['class' => 'col', 'name' => 'postal_code', 'label' =>'Code Postal', 'value' => $property->postal_code])
        </div>
        @include('shared.checkbox', ['name' => 'sold', 'label' => 'Vendu', 'value' => $property->sold])
        <div>
            <button class="btn btn-primary">
                @if($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>


    </form>

@endsection
