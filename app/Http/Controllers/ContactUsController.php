<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\ContactUs;
use Mail;

class ContactUsController extends Controller
{

    public function store(Request $request)
    {
        try{

            $this->validate($request,[
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);
            ContactUs::create($request->all());
            Mail::send('auth.email',
            array(
               'name' => $request->get('name'),
               'email' => $request->get('email'),
               'user_message' => $request->get('message')
            ), function($message) use ($request){
           $message->from($request->get('email'));
           $message->to('arnauinfantepinos@gmail.com', 'Admin')
           ->subject('Contact message - ' . $request->get('name'));
          });

          return redirect('/#Contacto')->with('success', 'Gracias por ponerte en contacto conmigo!');
        }catch(Exception $ex){
            return redirect('/#Contacto')->with('error', 'ERROR');
        }
    }
}
