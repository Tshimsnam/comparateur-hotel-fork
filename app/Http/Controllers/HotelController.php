<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\StorehotelRequest;
use App\Http\Requests\UpdatehotelRequest;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request->filter);
        if (isset($request->filter)) {
            // dd($request->filter);
            $hotels = Hotel::where('commune', $request->filter)->get();
            $status=true;
        } else {
            $hotels = Hotel::all();
            $status=false;
        }
        // dd($hotels);
        return view('pages.rooms', compact('hotels','status'));
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
    public function store(Request $request)
    {
        // Hotel::create([

        // ])
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        return view('pages.single',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('pages.rooms');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehotelRequest $request, Hotel $hotel)
    {
        //
    }

    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
