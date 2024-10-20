@php
    $name ??= null;
    $value ??= []; // Par défaut, il s'agit d'un tableau pour les valeurs multiples
    $class ??= '';
    $multiple ??= false; // Ajout pour supporter l'attribut multiple
@endphp

<div @class(['form-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}[]" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror" @if($multiple) multiple @endif>
        @foreach($options as $k => $v)
            <option value="{{ $k }}" @if(in_array($k, $value)) selected @endif>{{ $v }}</option>
        @endforeach
    </select>

    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
