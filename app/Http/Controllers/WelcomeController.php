<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about()
    {
        $name = "fuck";
        return view("pages/about",['name' => $name]);
    }
}
