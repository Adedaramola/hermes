<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends EloquentModel
{
    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }
}
