<?php

namespace App\Http\Controllers;

use App\Models\TransitBreakdown;
use Illuminate\Http\Request;
use Laravel\Sanctum\TransientToken;

class TransitBreakdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transitBreakdown = TransitBreakdown::all();
        return view('transit.view',compact('transitBreakdown'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TransitBreakdown::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransitBreakdown  $transitBreakdown
     * @return \Illuminate\Http\Response
     */
    public function show(TransitBreakdown $transitBreakdown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransitBreakdown  $transitBreakdown
     * @return \Illuminate\Http\Response
     */
    public function edit(TransitBreakdown $transitBreakdown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransitBreakdown  $transitBreakdown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransitBreakdown $transitBreakdown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransitBreakdown  $transitBreakdown
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransitBreakdown $transitBreakdown)
    {
        //
    }
}
