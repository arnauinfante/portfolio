<?php

namespace App\Http\Controllers;

use App\Models\Lenguaje;
use Illuminate\Http\Request;
use App\Clases\Utilitat;
use Illuminate\Database\QueryException;

class LenguajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lenguajes = Lenguaje::All();

        $data['lenguajes']= $lenguajes;
        return view('auth.admin.lenguajes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.admin.lenguajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lenguaje = new Lenguaje();
        $lenguaje->nom = $request->input('nombre');
        $lenguaje->anys = $request->input('años');

        try{
            $lenguaje->save();
        }catch(QueryException $e){

            $error = Utilitat::errorMessage($e);
            $request->session()->flash('error', $error);
            return redirect()->action('LenguajeController@create')->withInput();
        }
        return  redirect()->action('LenguajeController@index')->withInput();
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lenguaje  $lenguaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Lenguaje $lenguaje)
    {
        $data['lenguaje']= $lenguaje;
        return view('auth.admin.lenguajes.edit', $data);
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
        $lenguaje->nom = $request->input('nombre');
        $lenguaje->anys = $request->input('años');

        try{
            $lenguaje->save();

        }catch(QueryException $e){

            $error = Utilitat::errorMessage($e);
            $request->session()->flash('error', $error);
            return redirect()->action('LenguajeController@edit')->withInput();
        }
        return  redirect()->action('LenguajeController@index')->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lenguaje  $lenguaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lenguaje $lenguaje)
    {
        try{
            $lenguaje->delete();

        }catch(QueryException $ex)
        {
            $error = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $error);
        }
        return redirect('/lenguajes')->withInput();
    }
}
