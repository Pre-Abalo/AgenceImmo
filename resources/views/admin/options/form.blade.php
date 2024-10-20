@extends('admin.adminBase')

@section('title', $option->exists ? 'Editer une option' : 'Créer une option')

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


    <form class="vstack gap-2 mt-5" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option->exists ? ['option' => $option] : []) }}" method="post">
    @csrf
        @method($option->exists ? 'put' : 'post')
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name' => 'name', 'label' => 'Option', 'value' => $option->name])
        </div>
        <div>
            <button class="btn btn-primary">
                @if($option->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    </form>

@endsection
