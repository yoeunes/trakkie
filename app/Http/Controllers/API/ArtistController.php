<?php

namespace App\Http\Controllers\API;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Resources\ArtistCollection;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ArtistCollection(Artist::all());
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $Artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $Artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $Artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $Artist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $Artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $Artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $Artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $Artist)
    {
        //
    }
}
