<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showMessages (){
        // Pass Our Messages To The Messages View
        return view('messages', ['messages' => Message::all()]);
    }

    public function showForm() {
        return view('contact');
    }

    public function storeMessage(Request $req) {
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:8|max:1000'
        ]);

        // Use Our Message Model
        Message::create([
            'sender_name' => $validated['name'],
            'sender_email' => $validated['email'],
            'message' => $validated['message'],

        ]);

        return redirect('/messages');
    }
}
