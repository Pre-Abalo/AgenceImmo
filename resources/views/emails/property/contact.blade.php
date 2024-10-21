<x-mail::message>
# Nouvelle demande de contact pour le bien : {{ $property->title }}

Bonjour,

Vous avez reçu un nouveau message de la part de {{ $data['firstname'] }} {{ $data['lastname'] }} concernant le bien suivant : **{{ $property->title }}**.

## Détails du contact :
- **Prénom** : {{ $data['firstname'] }}
- **Nom** : {{ $data['lastname'] }}
- **Téléphone** : {{ $data['phone'] }}
- **Email** : {{ $data['email'] }}

## Message :
{{ $data['message'] }}

<x-mail::button :url="route('property.show', ['slug' => $property->getSlug(), 'property' => $property])">
    Voir le bien
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
