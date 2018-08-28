<?php

namespace App\Http\Controllers;

use App\Price;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $prices = Price::all();
        return view ('auth.pindex', compact('prices'));
        //return json_encode(price::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('price_edit'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Process and validate the request
        // Save the prices in the database
        // Redirect to an updated view
        $price = new Price;
        $price -> layout_vlu = $request -> layout_vlu;
        $price -> price = $request -> price;
        $price -> save();
        return redirect::to('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function show(prices $prices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function edit(prices $prices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prices $prices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function destroy(prices $prices)
    {
        //
    }
}
