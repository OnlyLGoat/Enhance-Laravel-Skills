<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function helloAPI()
    {
        return response()->json(['message' => 'api.php is working!']);
    }
}
