<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return view('nos-produits');
    }

    public function __invoke()
    {
        // Logique du contrôleur
    }
}