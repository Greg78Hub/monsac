<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag1 = new \App\Tag();
        $tag1->nom = "#Ville";
        $tag1->save();

        $tag2 = new \App\Tag();
        $tag2->nom = "#Aventure";
        $tag2->save();

        $tag3 = new \App\Tag();
        $tag3->nom = "#Ecole";
        $tag3->save();

        $tag4 = new \App\Tag();
        $tag4->nom = "#Connecté";
        $tag4->save();
    }
}
