<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = array(
            array('id' => 1, 'numerique' => 12, 'alpha2' => 'DZ', 'alpha3' => 'DZA', 'nom' => 'Algeria', 'nom_gb' => 'Algeria'),
            array('id' => 2, 'numerique' => 250, 'alpha2' => 'FR', 'alpha3' => 'FRA', 'nom' => 'France', 'nom_gb' => 'France'),
            array('id' => 3, 'numerique' => 724, 'alpha2' => 'ES', 'alpha3' => 'ESP', 'nom' => 'Spain', 'nom_gb' => 'Spain'),
            array('id' => 4, 'numerique' => 620, 'alpha2' => 'PT', 'alpha3' => 'PRT', 'nom' => 'Portugal', 'nom_gb' => 'Portugal'),
            array('id' => 5, 'numerique' => 380, 'alpha2' => 'IT', 'alpha3' => 'ITA', 'nom' => 'Italy', 'nom_gb' => 'Italy'),
            array('id' => 6, 'numerique' => 826, 'alpha2' => 'GB', 'alpha3' => 'GBR', 'nom' => 'United Kingdom', 'nom_gb' => 'United Kingdom'),
            array('id' => 7, 'numerique' => 56, 'alpha2' => 'BE', 'alpha3' => 'BEL', 'nom' => 'Belgium', 'nom_gb' => 'Belgium'),

        );
        DB::table('pays')->insert($countries);   
    }
}
