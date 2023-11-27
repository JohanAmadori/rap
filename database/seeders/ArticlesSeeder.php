<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'nom'  => 'Carte Zeu', 
            'description' => 'Carte type FUT, Hauteur:1m, Largeur:40cm, Poids:1kg ',
            'prix_public' => 20.00,
            'prix_achat' => 5.00,
        ]);

        DB::table('articles')->insert([
            'nom'  => 'Carte Lesram',
            'description' => 'Carte type FUT, Hauteur:1m, Largeur:40cm, Poids:1kg',
            'prix_public' => 18.00,
            'prix_achat' => 5.00,
        ]);


    
            

    }
}
