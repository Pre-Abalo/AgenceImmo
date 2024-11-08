<div class="card p-1">
    <div class="card-body">
        <h5 class="card-title text-2xl text-primary fw-bold">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
        </h5>
    </div>
    <p class="card-text">{{ $property->surface }}m&sup2; - {{ $property->city }} (BP: {{ $property->postal_code }})</p>
    <p class="card-text">{{ $property->surface }}m&sup2; - {{ $property->city }} (BP: {{ $property->postal_code }})</p>
    <div class="text-primary fw-bold text-2xl ">
        @if($property->sold === 1)
            <span class="line-through">{{ number_format($property->price, thousands_separator: ' ') }} €</span>
            <span class="text-danger me-0">sale</span>
        @else
            {{ number_format($property->price, thousands_separator: ' ') }} €
        @endif
    </div>
</div>
