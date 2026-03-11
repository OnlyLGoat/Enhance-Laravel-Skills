<?php

namespace App\Models\Order_Management;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'nom',
        'prenom',
        'adress'
    ];

}
