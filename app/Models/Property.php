<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperProperty
 */
class Property extends Model
{
    protected $fillable = ['surface', 'price', 'title', 'description', 'city', 'address', 'rooms', 'bedrooms', 'floor', 'sold', 'postal_code'];
}
