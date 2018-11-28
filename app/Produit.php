<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    // Méthode qui fait pointer vers le modèle catégorie(classe)

    public function category() {

        return $this->belongsTo('App\Category');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    public function recommandations(){
        return $this->belongsToMany('App\Produit','produit_recommande','produit_id','produit_recommande_id');
    }
}
