<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function liste_posts()
    {
        $posts = Post::paginate(3);
        return view('backend.posts.liste', compact('posts'));
    }
    public function ajouter_post()
    {
        $categories = Category::all();
        return view('backend.posts.ajouter', compact('categories'));
    }
    public function ajouter_traitement_post(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'id_category' => 'required',
            'image' => 'required',
            'description'=>'required',
        ]);

        $post = new Post();
        $post->title = $request->titre;
        $post->category_id = $request->id_category;
        $post->image = $request->image;
        $post->description = $request->description;
        $post->save();

        return redirect('/ajouter_post')->with('status','Le poste a ete publié');
    }

    public function modifier_post($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        return view('backend.posts.modifier', compact('post', 'categories'));
    }

    public function modifier_traitement_post(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'id_category' => 'required',
            'image' => 'required',
            'description'=>'required',
        ]);

        $post = Post::find($request->id);
        $post->title = $request->titre;
        $post->category_id = $request->id_category;
        $post->image = $request->image;
        $post->description = $request->description;
        $post->update();

        return redirect('/posts')->with('status','Le poste a ete modifié');
    }

    public function supprimer_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('status', 'Le post a éte supprimé');
    }
}
