<?php

namespace App\Http\Controllers\Order_Management;

use App\Http\Controllers\Controller;

use App\Models\Order_Management\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function displayClients(){
        return view('Order_Management.Clients.clients', ['clients' => Client::all()]);
    }

    public function createClient() {
        return view('Order_Management.Clients.create');
    }

    public function storeClient(Request $req){
        $validated = $req->validate([
            'id' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'adress' => 'required'
        ]);

        Client::create([
            'id' => $validated['id'],
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'adress' => $validated['adress'],

        ]);

        return redirect()->route('client.index');
    }

    public function editClient($id)
    {
        $c = Client::find($id);
        return view('Order_Management.Clients.edit', compact('c'));
    }

    public function modifyClient(Request $req, $id)
    {
        $clt = Client::find($id);
        $clt->update($req->all());
        return redirect()->route('client.index');
    }

    public function deleteClient($id)
    {
        $clt = Client::find($id);
        $clt->delete();
        return redirect()->route('client.index');
    }
}
