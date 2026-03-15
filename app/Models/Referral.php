<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referral extends Model
{

    // The Referrals Belongs To A Customer
    public function client(): BelongsTo
    {
        return $this->belongsTo(Customers::class);
    }
}
