<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Str;

/**
 * @mixin IdeHelperProperty
 */
class Property extends Model
{
    protected $fillable = [
        'surface',
        'price',
        'title',
        'description',
        'city',
        'address',
        'rooms',
        'bedrooms',
        'floor',
        'sold',
        'postal_code'
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class);
    }

    public function getSlug(): string
    {
        return Str::slug($this->title);
    }
}
