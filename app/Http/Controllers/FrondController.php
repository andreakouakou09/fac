<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class FrondController extends Controller
{
    public function accueil()
    {
        return view('front.accueil');
    }
    public function apropos()
    {
        return view('front.apropos');
    }
    public function services()
    {
        return view('front.services');
    }
    public function actualites()
    {
        return view('front.actualites');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function traitement_contact(Request $request)
    {
        $request->validate([
            'nomp' => 'required',
            'email' => 'required',
            'telephone' =>'required|numeric|digits:10',
            'sujet' => 'required',
            'message' => 'required'
        ]);

        $message = new Message();
        $message->nomprenom = $request->nomp;
        $message->email = $request->email;
        $message->contact = $request->telephone;
        $message->sujet = $request->sujet;
        $message->message = $request->message;
        $message->save();

        return redirect('/contact')->with('status','Votre message a été envoyé');;

    }
    public function formations()
    {
        return view('front.formation');
    }
}
