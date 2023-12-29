<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategorieController extends Controller
{
    public function liste_categories()
    {
        $categories = Category::all();
        return view('backend.categories.liste', compact('categories'));
    }
    public function ajouter_categorie()
    {
        return view('backend.categories.ajouter');
    }

    public function ajouter_traitement_categorie(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
            'description'=>'required',
        ]);

        $categorie = new Category();
        $categorie->nom = $request->nom;
        $categorie->description = $request->description;
        $categorie->save();

        return redirect('/ajouter_categorie')->with('status','La categorie a ete publié');
    }

    public function modifier_categorie($id)
    {
        $category = Category::find($id);
        return view('backend.categories.modifier', compact('category'));
    }
    public function modifier_traitement_category(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description'=>'required',
        ]);

        $category = Category::find($request->id);
        $category->nom = $request->nom;
        $category->description = $request->description;
        $category->update();

        return redirect('/categories')->with('status','La categorie a ete modifié');
    }

    public function supprimer_categorie($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('status', 'La categorie a éte supprimé');
    }
}
