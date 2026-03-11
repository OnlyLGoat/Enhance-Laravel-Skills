<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__. '/topics/contact.php';

require __DIR__. '/topics/order_management.php';
