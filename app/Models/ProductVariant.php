<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariant extends EloquentModel
{
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
