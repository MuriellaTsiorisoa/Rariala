<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Produit;
use App\Http\Requests\ProduitRequest;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $produits= Produit::all();
        return view('produits.index', ['produits'=>$produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProduitRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProduitRequest $request)
    {
        $produit = new Produit;
		$produit->id_categorie = $request->input('id_categorie');
		$produit->id_modele = $request->input('id_modele');
		$produit->nom = $request->input('nom');
		$produit->paragraphe = $request->input('paragraphe');
		$produit->quantite = $request->input('quantite');
		$produit->default = $request->input('default');
		$produit->hauteur = $request->input('hauteur');
		$produit->largeur = $request->input('largeur');
		$produit->prix_unitaire = $request->input('prix_unitaire');
		$produit->5 = $request->input('5');
		$produit->taille = $request->input('taille');
		$produit->MM = $request->input('MM');
		$produit->GM = $request->input('GM');
		$produit->type = $request->input('type');
		$produit->modele_existant = $request->input('modele_existant');
		$produit->produit = $request->input('produit');
		$produit->image_urls = $request->input('image_urls');
        $produit->save();

        return to_route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.show',['produit'=>$produit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.edit',['produit'=>$produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProduitRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProduitRequest $request, $id)
    {
        $produit = Produit::findOrFail($id);
		$produit->id_categorie = $request->input('id_categorie');
		$produit->id_modele = $request->input('id_modele');
		$produit->nom = $request->input('nom');
		$produit->paragraphe = $request->input('paragraphe');
		$produit->quantite = $request->input('quantite');
		$produit->default = $request->input('default');
		$produit->hauteur = $request->input('hauteur');
		$produit->largeur = $request->input('largeur');
		$produit->prix_unitaire = $request->input('prix_unitaire');
		$produit->5 = $request->input('5');
		$produit->taille = $request->input('taille');
		$produit->MM = $request->input('MM');
		$produit->GM = $request->input('GM');
		$produit->type = $request->input('type');
		$produit->modele_existant = $request->input('modele_existant');
		$produit->produit = $request->input('produit');
		$produit->image_urls = $request->input('image_urls');
        $produit->save();

        return to_route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return to_route('produits.index');
    }
}
