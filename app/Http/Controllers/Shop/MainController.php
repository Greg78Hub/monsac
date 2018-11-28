<?php

namespace App\Http\Controllers\Shop;

use App\Category;
use App\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    // Méthode consacré à l'affichage de la page d'accueil

    public function index() {

        //SELECT * FROM produits
        //Cette méthode va engendrer la requête ci-dessus
        $produits = Produit::with('category')->get();
        //dd($produits);//test: die et var dump intégré
        //Cette variable renvoie à la vue index.blade

       // $categories = Category::where('is_online',1)->get();

        return view('shop.index',compact('produits'));
    }

    // Méthode pour voir la vue d'un produit en particulier

    public function produit(Request $request) {
        //echo "page produit";
        //dd($_GET);
        // Récupère l'identifiant du produit
        // SELECT * FROM produits WHERE id = ?
        //dd($request->id);
        //$categories = Category::where('is_online',1)->get();

        $produit = Produit::find($request->id);


        return view ('shop.produit',compact('produit'));
    }

    // Méthode qui appelle le template "category"

    public function viewByCategory(Request $request) {
        // Récupérer toutes les catégories >> is_online == 1
        //$categories = Category::where('is_online',1)->get();
        //dd($categories);

        // SELECT * FROM produits WHERE category_id = $request->id
       //$produits = Produit::where('category_id',$request->id)->get();

        $category = Category::find($request->id);
        $produits = $category->produits();
                dd($produits);

        return view('shop.categorie',compact('produits','category'));
    }

    public function viewByTag(Request $request) {
        $tag = Tag::find($request->id);
        $produits = $tag->produits;
        return view('shop.category',compact('produit','category'));

    }
}
