<?php

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Produit();
        $produit->nom = "Sac chic";
        $produit->prix_ht = 60;
        $produit->description = "Sac pour la ville";
        $produit->photo_principale = "sacchic.png";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Louise";
        $produit->prix_ht = 30;
        $produit->description = "Sac pour les sorties scolaires";
        $produit->photo_principale = "sacenfant.png";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Minecraft";
        $produit->prix_ht = 40;
        $produit->description = "Sac pour les gamer";
        $produit->photo_principale = "sacenfant1.png";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Dora l'exploratrice";
        $produit->prix_ht = 30;
        $produit->description = "Sac pour l'école";
        $produit->photo_principale = "sacenfant2.png";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac pour ordinateur";
        $produit->prix_ht = 70;
        $produit->description = "Sac pour les travailleurs";
        $produit->photo_principale = "sacordinateur.png";
        $produit->category_id = 5;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac pour ordinateur";
        $produit->prix_ht = 70;
        $produit->description = "Sac pour les gamer";
        $produit->photo_principale = "sacordinateur1.png";
        $produit->category_id = 5;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac connecté";
        $produit->prix_ht = 60;
        $produit->description = "Sac connecté";
        $produit->photo_principale = "sacordinateur2.png";
        $produit->category_id = 5;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac ohushy";
        $produit->prix_ht = 60;
        $produit->description = "Sac pour la randonnée";
        $produit->photo_principale = "sacrando.png";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Fox";
        $produit->prix_ht = 60;
        $produit->description = "Sac pour l'aventure";
        $produit->photo_principale = "sacrando1.png";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac CamelBak";
        $produit->prix_ht = 70;
        $produit->description = "Sac pour les expéditions";
        $produit->photo_principale = "sacrando2.png";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Thor";
        $produit->prix_ht = 60;
        $produit->description = "Sac pour l'aventure";
        $produit->photo_principale = "sacrando3.png";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Kappa";
        $produit->prix_ht = 50;
        $produit->description = "Sac pour le sport";
        $produit->photo_principale = "sacsport.png";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Orca";
        $produit->prix_ht = 60;
        $produit->description = "Sac pour le sport";
        $produit->photo_principale = "sacsport1.png";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Rugby";
        $produit->prix_ht = 50;
        $produit->description = "Sac des rugbymen";
        $produit->photo_principale = "sacsport2.png";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Quechua";
        $produit->prix_ht = 30;
        $produit->description = "Sac pour le sport";
        $produit->photo_principale = "sacsport3.png";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Produit();
        $produit->nom = "Sac Büse";
        $produit->prix_ht = 60;
        $produit->description = "Sac pour les sportifs";
        $produit->photo_principale = "sacsport4.png";
        $produit->category_id = 1;
        $produit->save();
    }
}
