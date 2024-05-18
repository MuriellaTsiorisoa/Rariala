<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnalisationController extends Controller
{
    public function index()
    {
        return view('personnalisation');
    }

    public function __invoke()
    {
        // Logique du contrôleur
    }
}
