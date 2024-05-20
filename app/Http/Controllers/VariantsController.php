<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Variant;
use App\Http\Requests\VariantRequest;

class VariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $variants= Variant::all();
        return view('variants.index', ['variants'=>$variants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('variants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  VariantRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VariantRequest $request)
    {
        $variant = new Variant;
		$variant->variant = $request->input('variant');
        $variant->save();

        return to_route('variants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $variant = Variant::findOrFail($id);
        return view('variants.show',['variant'=>$variant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $variant = Variant::findOrFail($id);
        return view('variants.edit',['variant'=>$variant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VariantRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(VariantRequest $request, $id)
    {
        $variant = Variant::findOrFail($id);
		$variant->variant = $request->input('variant');
        $variant->save();

        return to_route('variants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $variant = Variant::findOrFail($id);
        $variant->delete();

        return to_route('variants.index');
    }
}
