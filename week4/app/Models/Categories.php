<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categories extends Model
{
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Posts::class, 'post_category');
    }
}
