<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Personnalisation;
use App\Http\Requests\PersonnalisationRequest;

class PersonnalisationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $personnalisations= Personnalisation::all();
        return view('personnalisations.index', ['personnalisations'=>$personnalisations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('personnalisations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PersonnalisationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PersonnalisationRequest $request)
    {
        $personnalisation = new Personnalisation;
		$personnalisation->id_produit = $request->input('id_produit');
		$personnalisation->id_variant_option = $request->input('id_variant_option');
        $personnalisation->save();

        return to_route('personnalisations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $personnalisation = Personnalisation::findOrFail($id);
        return view('personnalisations.show',['personnalisation'=>$personnalisation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $personnalisation = Personnalisation::findOrFail($id);
        return view('personnalisations.edit',['personnalisation'=>$personnalisation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PersonnalisationRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PersonnalisationRequest $request, $id)
    {
        $personnalisation = Personnalisation::findOrFail($id);
		$personnalisation->id_produit = $request->input('id_produit');
		$personnalisation->id_variant_option = $request->input('id_variant_option');
        $personnalisation->save();

        return to_route('personnalisations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $personnalisation = Personnalisation::findOrFail($id);
        $personnalisation->delete();

        return to_route('personnalisations.index');
    }
}
