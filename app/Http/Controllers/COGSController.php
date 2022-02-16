<?php

namespace App\Http\Controllers;

use App\Models\COGS;
use Illuminate\Http\Request;

class COGSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cogs = COGS::all();
        return view('views', compact('cogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        COGS::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\COGS  $cOGS
     * @return \Illuminate\Http\Response
     */
    public function show(COGS $cOGS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\COGS  $cOGS
     * @return \Illuminate\Http\Response
     */
    public function edit(COGS $cOGS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\COGS  $cOGS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, COGS $cOGS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\COGS  $cOGS
     * @return \Illuminate\Http\Response
     */
    public function destroy(COGS $cOGS)
    {
        //
    }
}
