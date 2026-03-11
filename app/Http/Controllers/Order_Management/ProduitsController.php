<?php

namespace App\Http\Controllers\Order_Management;

use App\Http\Controllers\Controller;
use App\Models\Order_Management\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function displayProduits(){
        return view('Order_Management.Produits.produits', ['produits' => Produit::all()]);
    }

    public function createProduit() {
        return view('Order_Management.Produits.create');
    }

    public function storeProduit(Request $req){
        $validated = $req->validate([
            'id' => 'required',
            'designation' => 'required',
            'prix' => 'required',
            'qte_stock' => 'required',
        ]);

        Produit::create([
            'id' => $validated['id'],
            'designation' => $validated['designation'],
            'prix' => $validated['prix'],
            'qte_stock' => $validated['qte_stock'],
        ]);

        return redirect()->route('produit.index');
    }

    public function editProduit($id){
        $prod = Produit::find($id);
        return view('Order_Management.Produits.edit', compact('prod'));
    }

    public function modifyProduit(Request $req, $id)
    {
        $prod = Produit::find($id);
        $prod->update($req->all());
        return redirect()->route('produit.index');
    }

    public function deleteProduit($id)
    {
        $prod = Produit::find($id);
        $prod->delete();
        return redirect()->route('produit.index');
    }
}
