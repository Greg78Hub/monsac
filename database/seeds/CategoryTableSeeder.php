<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instantiation des objets catégory

        // Catégories parent

        // $category = new \App\Category();
        // $category->nom = "Sport";
        // $category->is_online = 1;
        // $category->save();

        // $category2 = new \App\Category();
        // $category2->nom = "Randonnée";
        // $category2->is_online = 1;
        // $category2->save();

        // $category3 = new \App\Category();
        // $category3->nom = "Chic";
        // $category3->is_online = 1;
        // $category3->save();

        // $category4 = new \App\Category();
        // $category4->nom = "Enfants";
        // $category4->is_online = 1;
        // $category4->save();

        // $category5 = new \App\Category();
        // $category5->nom = "Connecté";
        // $category5->is_online = 1;
        // $category5->save();

        // Catégories enfant
        $category6 = new \App\Category();
        $category6->nom = "Kappa";
        $category6->is_online = 1;
        $category6->parent_id = 1;
        $category6->save();

        $category7 = new \App\Category();
        $category7->nom = "Quechua";
        $category7->is_online = 1;
        $category7->parent_id = 1;
        $category7->save();

        $category8 = new \App\Category();
        $category8->nom = "Orca";
        $category8->is_online = 1;
        $category8->parent_id = 1;
        $category8->save();

        $category9 = new \App\Category();
        $category9->nom = "Büse";
        $category9->is_online = 1;
        $category9->parent_id = 1;
        $category9->save();

        $category10 = new \App\Category();
        $category10->nom = "Louise";
        $category10->is_online = 1;
        $category10->parent_id = 4;
        $category10->save();

        $category11 = new \App\Category();
        $category11->nom = "Dora";
        $category11->is_online = 1;
        $category11->parent_id = 4;
        $category11->save();

        $category12 = new \App\Category();
        $category12->nom = "Minecraft";
        $category12->is_online = 1;
        $category12->parent_id = 4;
        $category12->save();

        // $category = new \App\Category();
        // $category->nom = "Eminent";
        // $category->is_online = 1;
        // $category->parent_id = 5;
        // $category->save();

        // $category = new \App\Category();
        // $category->nom = "Targus";
        // $category->is_online = 1;
        // $category->parent_id = 5;
        // $category->save();

        // $category = new \App\Category();
        // $category->nom = "Gorilla";
        // $category->is_online = 1;
        // $category->parent_id = 5;
        // $category->save();

        // $category = new \App\Category();
        // $category->nom = "Ohushy";
        // $category->is_online = 1;
        // $category->parent_id = 2;
        // $category->save();

        // $category = new \App\Category();
        // $category->nom = "Fox";
        // $category->is_online = 1;
        // $category->parent_id = 2;
        // $category->save();

        // $category = new \App\Category();
        // $category->nom = "CamelBak";
        // $category->is_online = 1;
        // $category->parent_id = 2;
        // $category->save();

        // $category = new \App\Category();
        // $category->nom = "Thor";
        // $category->is_online = 1;
        // $category->parent_id = 2;
        // $category->save();



    }
}
