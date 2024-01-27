<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Http\Requests\StorechambreRequest;
use App\Http\Requests\UpdatechambreRequest;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chambres.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorechambreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chambre $chambre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chambre $chambre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatechambreRequest $request, Chambre $chambre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chambre $chambre)
    {
        //
    }
}
