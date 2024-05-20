<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Ligne_panier;
use App\Http\Requests\Ligne_panierRequest;

class Ligne_paniersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $ligne_paniers= Ligne_panier::all();
        return view('ligne_paniers.index', ['ligne_paniers'=>$ligne_paniers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('ligne_paniers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Ligne_panierRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Ligne_panierRequest $request)
    {
        $ligne_panier = new Ligne_panier;
		$ligne_panier->id_personnalisation = $request->input('id_personnalisation');
		$ligne_panier->id_produit = $request->input('id_produit');
		$ligne_panier->quantite = $request->input('quantite');
		$ligne_panier->default = $request->input('default');
        $ligne_panier->save();

        return to_route('ligne_paniers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $ligne_panier = Ligne_panier::findOrFail($id);
        return view('ligne_paniers.show',['ligne_panier'=>$ligne_panier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $ligne_panier = Ligne_panier::findOrFail($id);
        return view('ligne_paniers.edit',['ligne_panier'=>$ligne_panier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Ligne_panierRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Ligne_panierRequest $request, $id)
    {
        $ligne_panier = Ligne_panier::findOrFail($id);
		$ligne_panier->id_personnalisation = $request->input('id_personnalisation');
		$ligne_panier->id_produit = $request->input('id_produit');
		$ligne_panier->quantite = $request->input('quantite');
		$ligne_panier->default = $request->input('default');
        $ligne_panier->save();

        return to_route('ligne_paniers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $ligne_panier = Ligne_panier::findOrFail($id);
        $ligne_panier->delete();

        return to_route('ligne_paniers.index');
    }
}
