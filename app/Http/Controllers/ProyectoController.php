<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Lenguaje;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['proyectos'] = Proyecto::All();
        return view('auth.admin.proyectos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['lenguajes'] = Lenguaje::all();

        return view('auth.admin.proyectos.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->nom = $request->input('nombre');
        $proyecto->url = $request->input('url');
        $proyecto->descripcio = $request->input('descripcion');
        $lenguajes = $request->input('lenguajes');

        $proyecto->save();

        foreach($lenguajes as $lenguaje){

            $proyecto->lenguajes()->attach($lenguaje);
        }

        try{
            $proyecto->save();

        }catch(QueryException $e){

            $error = Utilitat::errorMessage($e);
            $request->session()->flash('error', $error);
            return redirect()->action('ProyectoController@create')->withInput();
        }
        return  redirect()->action('ProyectoController@index')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        $data['lenguajes'] = Lenguaje::All();
        $data['proyecto'] = $proyecto;

        return view('auth.admin.proyectos.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->nom = $request->input('nombre');
        $proyecto->url = $request->input('url');
        $proyecto->descripcio = $request->input('descripcion');
        $lenguajes = $request->input('lenguajes');

        $proyecto->save();
        $proyecto->lenguajes()->detach();

        foreach ($lenguajes as $lenguaje) {
            $proyecto->lenguajes()->attach($lenguaje);
        }

        try{
            $proyecto->save();

        }catch(QueryException $e){

            $error = Utilitat::errorMessage($e);
            $request->session()->flash('error', $error);
            return redirect()->action('ProyectoController@edit')->withInput();
        }
        return  redirect()->action('ProyectoController@index')->withInput();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        try{
            $proyecto->delete();

        }catch(QueryException $ex)
        {
            $error = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $error);
        }
        return redirect('/proyectos')->withInput();
    }
}
