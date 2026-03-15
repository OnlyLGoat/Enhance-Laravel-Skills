<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customers extends Model
{

    // The Customer Belongs To A Plumber
    public function plumber(): BelongsTo
    {
        return $this->belongsTo(Plumber::class);
    }

    // The Customer Has Many Referrals
    public function referalls(): HasMany
    {
        return $this->hasMany(Referral::class);
    }
}
