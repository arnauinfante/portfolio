<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['proyectos'] = 3;
        $data['lenguajes'] = 20;
        $data['idiomas'] = 4;
        $data['lenguaje'] = 'php';

        return view('auth.home', $data);
    }
}
