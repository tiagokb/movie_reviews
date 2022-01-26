<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tests extends Controller
{
    public function index(Request $request)
    {
        $firebase = new FirebaseController();
        $firebase->setReference();
        var_dump('finished');
    }
}
