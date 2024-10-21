<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyContactRequest;
use App\Http\Requests\SearchPropertiesRequest;
use App\Mail\PropertyContactMail;
use App\Models\Property;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query()->orderBy('created_at', 'desc');
        if ($price = $request->validated('price')){
            $query = $query->where('price', '<=', $price);
        }
        if ($surface = $request->validated('surface')){
            $query = $query->where('surface', '>=', $surface);
        }
        if ($rooms = $request->validated('rooms')){
            $query = $query->where('rooms', '>=', $rooms);
        }
        if ($city = $request->validated('city')){
            $query = $query->where('city', 'like', "%{$city}%");
        }
        if ($title = $request->validated('title')){
            $query = $query->where('title', 'like', "%{$title}%");
        }

        $properties = Property::paginate(20);
        return view( 'property.index', [
            'properties' => $query->paginate(20),
            'input' => $request->validated()
        ]);
    }

    public function show(string $slug, Property $property)
    {
        $expectedSlug = $property->getSlug();
        if ($slug != $expectedSlug) {
            return to_route('property.show', ['slug' => $expectedSlug, 'property' => $property]);
        }

        // Utilisation de Faker
        $faker = Faker::create();

        return view('property.show', [
            'property' => $property,
            'fakerData' => [
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'message' => $faker->sentence(20)
            ]
        ]);
    }

    public function contact(Property $property, PropertyContactRequest $request)
    {
        Mail::send(new PropertyContactMail($property, $request->validated()));
        return back()->with('success', 'Le mail deee demande de contact à bien été envoyé :)');
    }
}
