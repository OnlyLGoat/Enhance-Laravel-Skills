<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Plumber extends Model
{
    public function clients(): HasMany
    {
        return $this->hasMany(Customers::class);
    }

    // The Plumber Has Many Referrals Through A Customer
    public function clientReferrals(): HasManyThrough
    {
        return $this->hasManyThrough(Referral::class, Customers::class);
    }

    // The Plumber Has One Referral Through A Customer
    public function clientReferral(): HasOneThrough
    {
        return $this->hasOneThrough(Referral::class, Customers::class);
    }

}
