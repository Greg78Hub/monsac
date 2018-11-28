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

        $category = new \App\Category();
        $category->nom = "Sport";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Randonnée";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Chic";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Enfants";
        $category->is_online = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Connecté";
        $category->is_online = 1;
        $category->save();

        // Catégories enfant
        $category = new \App\Category();
        $category->nom = "Kappa";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Quechua";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Orca";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Büse";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Louise";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Dora";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Minecraft";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Eminent";
        $category->is_online = 1;
        $category->parent_id = 5;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Targus";
        $category->is_online = 1;
        $category->parent_id = 5;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Gorilla";
        $category->is_online = 1;
        $category->parent_id = 5;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Ohushy";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Fox";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Category();
        $category->nom = "CamelBak";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Category();
        $category->nom = "Thor";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();



    }
}
