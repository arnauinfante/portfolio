<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\Idioma;
use Illuminate\Http\Request;
use App\Clases\Utilitat;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idiomas = Idioma::All();
        $data['idiomas']= $idiomas;

        return view('auth.admin.idiomas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.admin.idiomas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idioma = new Idioma();
        $idioma->nom = $request->input('nombre');
        $idioma->nivell = $request->input('nivel');

        try{
            $idioma->save();

            return redirect('/idiomas')->withInput();
        }catch(QueryException $e)
        {
            $error= Utilitat::errorMessage($e);
            $request->session()->flash('error', $error);

            return redirect('/idiomas/create')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function show(Idioma $idioma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function edit(Idioma $idioma)
    {
        $data['idioma'] = $idioma;
        return view('auth.admin.idiomas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idioma $idioma)
    {
        $idioma->nom = $request->input('nombre');
        $idioma->nivell = $request->input('nivel');

        try{

            $idioma->save();

        }catch(QueryException $ex)
        {
            $error = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $error);
        }
        return redirect('/idiomas')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idioma $idioma)
    {
        try{
            $idioma->delete();

        }catch(QueryException $ex)
        {
            $error = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $error);
        }
        return redirect('/idiomas')->withInput();
    }
}
