<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    public function user(): BelongsTo
    {
        // This If We Have A Primary Key With Another Name
        // user_id Is A FK and owner_id Is A PK

        // return $this->belongsTo(User::class, 'user_id', 'owner_id');

        return $this->belongsTo(User::class);
    }
}
