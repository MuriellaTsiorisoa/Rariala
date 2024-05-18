<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeleExistantController extends Controller
{
    public function index()
    {
        return view('modele-existant');
    }

    public function __invoke()
    {
        // Logique du contrôleur
    }
}
