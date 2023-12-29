<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $contacts = Message::all()->count();
        $posts = Post::all()->count();
        $contactslistes = DB::table('messages')->orderByDesc('id')->limit(8)->get();
        // $contactslistes = Message::all()->orderBy('created_at')->get();
        return view('dashboard', compact('contacts', 'posts', 'contactslistes'));
    }
}
