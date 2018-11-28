<?php

namespace App\Http\Controllers\Shop;

use App\Produit;
use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    // Ajouter un produit au panier
    public function add(Request $request) {

        $produit = Produit::find($request->id);
        Cart::add(array(
            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->qty,
            'attributes' => array('color'=>$request->color)
        ));

        return redirect(route('cart_index'));
    }

    public function index() {

        $content = Cart::getContent();
        dd($content);
    }
}
