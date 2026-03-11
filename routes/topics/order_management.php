<?php

use App\Http\Controllers\Order_Management\ClientsController;
use App\Http\Controllers\Order_Management\ProduitsController;


    // GET Method To Display Tables
    Route::get(
        '/clients',
        [ClientsController::class, 'displayClients']
    )->name('client.index');

    Route::get(
        '/produits',
        [ProduitsController::class, 'displayProduits']
    )->name('produit.index');


    // GET Method To Display Add Forms
    Route::get(
        '/clients/create',
        [ClientsController::class, 'createClient']
    )->name('client.create');

    Route::get(
        '/produits/create',
        [ProduitsController::class, 'createProduit']
    )->name('produit.create');


    // GET Method To Display Modify Forms
    Route::get(
        '/clients/{id}/edit',
        [ClientsController::class, 'editClient']
    )->name('client.edit');

    Route::get(
        '/produits/{id}/edit',
        [ProduitsController::class, 'editProduit']
    )->name('produit.edit');


    // POST Method To Handle Insertions Requests
    Route::post(
        '/clients/store',
        [ClientsController::class, 'storeClient']
    )->name('client.store');

    Route::post(
        '/produits/store',
        [ProduitsController::class, 'storeProduit']
    )->name('produit.store');

    //PUT Method To Handle Modifications Requests
    Route::put(
        '/clients/{id}/modify',
        [ClientsController::class, 'modifyClient']
    )->name('client.modify');

    Route::put(
        '/produits/{id}/modify',
        [ProduitsController::class, 'modifyProduit']
    )->name('produit.modify');

    //DELETE Method To Handle Delete Requests
    Route::delete(
        '/clients/{id}/delete',
        [ClientsController::class, 'deleteClient']
    )->name('client.delete');

    Route::delete(
        '/produits/{id}/delete',
        [ProduitsController::class, 'deleteProduit']
    )->name('produit.delete');

