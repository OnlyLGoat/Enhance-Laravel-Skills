<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Order_Management.index');
});

require __DIR__. '/topics/contact.php';
require __DIR__. '/topics/order_management.php';
