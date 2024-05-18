<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formeLibreController extends Controller
{
    public function index()
    {
        return view('forme');
    }

    public function __invoke()
    {
        // Logique du contrôleur
    }
}
