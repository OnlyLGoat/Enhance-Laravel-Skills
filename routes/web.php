<?php

use App\Http\Controllers\ContactController;
use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Using Our Routes Without Controllers
// Route::method('/route', function(){});

// // Create A GET Route Contact
// // Access To Contact View With A GET Method
// Route::get('/contact', function() {
//     return view('contact');
// });

// // Create A POST Route Contact
// // Handle And Validate Contact Infos WIth A POST Method
// Route::post('/contact', function(Request $req){
//         $validated = $req->validate([
//         'name' => 'required',
//         'email' => 'required|email',
//         'message' => 'required|min:8|max:1000'
//     ]);

//     // Use Our Message Model
//     Message::create([
//         'sender_name' => $validated['name'],
//         'sender_email' => $validated['email'],
//         'message' => $validated['message'],

//     ]);

//     return redirect('/messages');
// });

// // Create A GET Route Messages
// Route::get('/messages', function(){

//     // Pass Our Messages To The Messages View
//     return view('messages', ['messages' => Message::all()]);
// });


// Using Our Routes With Controllers
// Route::method('/route', [NameController::class, 'Controller Function Name']);



// Create A GET Route Contact
// Access To Contact View With A GET Method
Route::get('/contact', [ContactController::class, 'showForm']);

// Create A POST Route Contact
// Handle And Validate Contact Infos WIth A POST Method
Route::post('/contact', [ContactController::class, 'storeMessage']);

// Create A GET Route Messages
Route::get('/messages', [ContactController::class, 'showMessages']);
