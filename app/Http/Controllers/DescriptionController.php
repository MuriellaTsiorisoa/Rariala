<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index()
    {
        return view('description');
    }

    public function __invoke()
    {
        // Logique du contrôleur
    }
}


