<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 19/11/2018
 * Time: 13:03
 */

namespace App\Http\ViewComposers;


use App\Category;
use Illuminate\View\View;

class HeaderComposer
{
        // Méthode pour que la vue des catégories soit générée automatiquement

    public function compose(View $view) {

        // Récupère les catégories parent avec la valeur null
        $matches = ['is_online'=>1, 'parent_id'=>null];
        $view->with('categories',Category::where($matches)->get());

    }
}