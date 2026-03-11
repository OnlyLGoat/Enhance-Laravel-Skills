<?php

namespace App\Models\Order_Management;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'designation',
        'prix',
        'qte_stock'
    ];
}
