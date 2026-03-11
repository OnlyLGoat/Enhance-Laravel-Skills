<?php

namespace App\Models\Order_Management;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'designation',
        'prix',
        'qte_stock'
    ];
}
