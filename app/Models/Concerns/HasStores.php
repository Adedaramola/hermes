<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use App\Models\Store;
use App\Models\StoreUser;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

trait HasStores
{
    public function stores(): BelongsToMany
    {
        return $this->belongsToMany(Store::class, StoreUser::class)
            ->withPivot('role_id')
            ->withTimestamps()
            ->as('membership');
    }

    public function ownedStores(): HasMany
    {
        return $this->hasMany(Store::class);
    }

    public function isCurrentStore(Store $store): bool
    {
        return $store->id === $this->currentStore->id;
    }

    public function currentStore(): BelongsTo
    {
        if (null === $this->current_store_id && $this->id) {
            $this->switchStore($this->personalStore());
        }

        return $this->belongsTo(Store::class, 'current_store_id', 'id');
    }

    public function switchStore(Store $store): bool
    {
        if ( ! $this->belongsToStore($store)) {
            return false;
        }

        $this->forceFill([
            'current_store_id' => $store->id
        ])->save();

        $this->setRelation('currentStore', $store);

        return true;
    }

    public function personalStore(): Store
    {
        return $this->ownedStores->firstWhere('personal_store', true);
    }

    public function allStores(): Collection
    {
        return $this->ownedStores->merge($this->stores)->sortBy('name');
    }

    public function ownsStore(Store $store): bool
    {
        if (null === $store) {
            return false;
        }

        return $this->id === $store->{$this->getForeignKey()};
    }

    public function belongsToStore(Store $store): bool
    {
        if (null === $store) {
            return false;
        }

        return $this->ownsStore($store) || $this->stores->contains(fn ($s) => $s->id === $store->id);
    }
}
