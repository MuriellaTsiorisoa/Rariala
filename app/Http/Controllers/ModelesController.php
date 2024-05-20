<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Modele;
use App\Http\Requests\ModeleRequest;

class ModelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $modeles= Modele::all();
        return view('modeles.index', ['modeles'=>$modeles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('modeles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ModeleRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ModeleRequest $request)
    {
        $modele = new Modele;
		$modele->modele = $request->input('modele');
        $modele->save();

        return to_route('modeles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $modele = Modele::findOrFail($id);
        return view('modeles.show',['modele'=>$modele]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $modele = Modele::findOrFail($id);
        return view('modeles.edit',['modele'=>$modele]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ModeleRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ModeleRequest $request, $id)
    {
        $modele = Modele::findOrFail($id);
		$modele->modele = $request->input('modele');
        $modele->save();

        return to_route('modeles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $modele = Modele::findOrFail($id);
        $modele->delete();

        return to_route('modeles.index');
    }
}
