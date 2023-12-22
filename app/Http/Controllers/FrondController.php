<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Mail;
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
    public function contact_mail_send(Request $request)
    {
        // dd($request->all());
        Mail::to('andrealastar38@yahoo.fr')->send(new ContactMail($request));
        return redirect('contact');
    }
}
