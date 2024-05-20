<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Commande;
use App\Http\Requests\CommandeRequest;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $commandes= Commande::all();
        return view('commandes.index', ['commandes'=>$commandes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('commandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CommandeRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CommandeRequest $request)
    {
        $commande = new Commande;
		$commande->id_panier = $request->input('id_panier');
		$commande->id_user = $request->input('id_user');
		$commande->nom = $request->input('nom');
		$commande->email = $request->input('email');
		$commande->adresse_livraison = $request->input('adresse_livraison');
		$commande->reperage_livraison = $request->input('reperage_livraison');
		$commande->ville = $request->input('ville');
		$commande->province = $request->input('province');
		$commande->code_postal = $request->input('code_postal');
		$commande->telephone = $request->input('telephone');
		$commande->reference_transfert = $request->input('reference_transfert');
		$commande->date_commande = $request->input('date_commande');
        $commande->save();

        return to_route('commandes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $commande = Commande::findOrFail($id);
        return view('commandes.show',['commande'=>$commande]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $commande = Commande::findOrFail($id);
        return view('commandes.edit',['commande'=>$commande]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CommandeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CommandeRequest $request, $id)
    {
        $commande = Commande::findOrFail($id);
		$commande->id_panier = $request->input('id_panier');
		$commande->id_user = $request->input('id_user');
		$commande->nom = $request->input('nom');
		$commande->email = $request->input('email');
		$commande->adresse_livraison = $request->input('adresse_livraison');
		$commande->reperage_livraison = $request->input('reperage_livraison');
		$commande->ville = $request->input('ville');
		$commande->province = $request->input('province');
		$commande->code_postal = $request->input('code_postal');
		$commande->telephone = $request->input('telephone');
		$commande->reference_transfert = $request->input('reference_transfert');
		$commande->date_commande = $request->input('date_commande');
        $commande->save();

        return to_route('commandes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $commande = Commande::findOrFail($id);
        $commande->delete();

        return to_route('commandes.index');
    }
}
