<?php

namespace App\Http\Controllers\api;

use App\Models\Lenguaje;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\LenguajeResource;

class LenguajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lenguajes = Lenguaje::all();

        return LenguajeResource::collection($lenguajes);
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
     * @param  \App\Models\Lenguaje  $lenguaje
     * @return \Illuminate\Http\Response
     */
    public function show(Lenguaje $lenguaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lenguaje  $lenguaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lenguaje $lenguaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lenguaje  $lenguaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lenguaje $lenguaje)
    {
        //
    }
}
