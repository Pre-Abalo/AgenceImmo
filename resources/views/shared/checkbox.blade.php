@php
$name ??= null;
$value ??= false;
$class ??= ''
@endphp

<div @class(['form-check form-switch', $class])>
    <input type="hidden" name="{{ $name }}" value="0">
    <input type="checkbox" @checked(old($name, $value ?? false)) name="{{ $name }}" class="form-check-input" value="1" id="{{ $name }}" role="switch">
    <label for="{{ $name }}" class="form-check-label">{{ $label }}</label>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
