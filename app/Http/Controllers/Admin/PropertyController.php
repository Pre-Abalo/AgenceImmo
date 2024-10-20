<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Models\Option;
use App\Models\Property;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.properties.index', [
           'properties' => Property::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $faker = Faker::create();

        $property = new Property();
        $property->fill([
            'title' => $faker->words(3, true), // Génère un titre de trois mots
            'description' => $faker->sentence(50), // Génère une phrase aléatoire
            'surface' => $faker->numberBetween(20, 200), // Surface entre 20 et 200
            'rooms' => $faker->numberBetween(1, 10), // Entre 1 et 10 pièces
            'bedrooms' => $faker->numberBetween(0, 5), // Entre 0 et 5 chambres
            'city' => $faker->city, // Nom de ville aléatoire
            'address' => $faker->address, // Adresse aléatoire
            'floor' => $faker->numberBetween(0, 10), // Étages entre 0 et 10
            'postal_code' => $faker->numberBetween(1000, 100000), // Code postal aléatoire
            'price' => $faker->numberBetween(10000, 500000), // Prix entre 10,000 et 500,000
            'sold' => $faker->boolean, // Statut aléatoire (vendu ou non)
        ]);
        return view('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
        $property = Property::create($request->validated());
        $options = $request->input('options', []); // Récupère les options sélectionnées
        $property->options()->sync($options); // Synchronise les options
        return to_route('admin.property.index')->with('success', 'Le bien a bien été crée ! :)');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        $property->update($request->validated());
        $options = $request->input('options', []); // Récupère les options sélectionnées
        $property->options()->sync($options); // Synchronise les options
        return to_route('admin.property.index')->with('success', 'Le bien a bien été modifié ! :)');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return to_route('admin.property.index')->with('success', 'Le bien a bien été supprimé ! :)');
    }
}
