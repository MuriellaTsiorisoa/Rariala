<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Stock;
use App\Http\Requests\StockRequest;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $stocks= Stock::all();
        return view('stocks.index', ['stocks'=>$stocks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StockRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StockRequest $request)
    {
        $stock = new Stock;
		$stock->id_produit = $request->input('id_produit');
		$stock->quantite_restante = $request->input('quantite_restante');
        $stock->save();

        return to_route('stocks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.show',['stock'=>$stock]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stocks.edit',['stock'=>$stock]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StockRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StockRequest $request, $id)
    {
        $stock = Stock::findOrFail($id);
		$stock->id_produit = $request->input('id_produit');
		$stock->quantite_restante = $request->input('quantite_restante');
        $stock->save();

        return to_route('stocks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return to_route('stocks.index');
    }
}
