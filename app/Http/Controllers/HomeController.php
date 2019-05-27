<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Utilitat;
use App\ContactUs;

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
        $contactos = ContactUs::All();
        $data['contactos'] = $contactos;

        return view('auth.home', $data);
    }
    public function destroy(ContactUs $contactus)
    {
        try{
            $contactus->delete();

        }catch(QueryException $ex)
        {
            $error = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $error);
        }
        return redirect('/home')->withInput();

    }
}
