<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function liste_message()
    {
        $contacts = Message::all();
        return view('backend.listemessage', compact('contacts'));
    }
    public function show_message($id)
    {
        $contact = Message::find($id);
        return view('backend.showmessage', compact('contact'));
    }
    public function delete_message($id)
    {
        $contact = Message::find($id);
        $contact->delete();
        return redirect('/messages')->with('status', 'Ce message a éte supprimé');
    }
}
