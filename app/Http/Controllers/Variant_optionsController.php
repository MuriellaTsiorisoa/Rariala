<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Variant_option;
use App\Http\Requests\Variant_optionRequest;

class Variant_optionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $variant_options= Variant_option::all();
        return view('variant_options.index', ['variant_options'=>$variant_options]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('variant_options.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Variant_optionRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Variant_optionRequest $request)
    {
        $variant_option = new Variant_option;
		$variant_option->id_variant = $request->input('id_variant');
		$variant_option->variant_option = $request->input('variant_option');
		$variant_option->prix_unitaire = $request->input('prix_unitaire');
		$variant_option->5 = $request->input('5');
		$variant_option->image_urls = $request->input('image_urls');
        $variant_option->save();

        return to_route('variant_options.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $variant_option = Variant_option::findOrFail($id);
        return view('variant_options.show',['variant_option'=>$variant_option]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $variant_option = Variant_option::findOrFail($id);
        return view('variant_options.edit',['variant_option'=>$variant_option]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Variant_optionRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Variant_optionRequest $request, $id)
    {
        $variant_option = Variant_option::findOrFail($id);
		$variant_option->id_variant = $request->input('id_variant');
		$variant_option->variant_option = $request->input('variant_option');
		$variant_option->prix_unitaire = $request->input('prix_unitaire');
		$variant_option->5 = $request->input('5');
		$variant_option->image_urls = $request->input('image_urls');
        $variant_option->save();

        return to_route('variant_options.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $variant_option = Variant_option::findOrFail($id);
        $variant_option->delete();

        return to_route('variant_options.index');
    }
}
