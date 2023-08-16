<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\BelongsToStore;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends EloquentModel
{
    use BelongsToStore;

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }
}
