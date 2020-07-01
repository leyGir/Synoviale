<?php

use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bikes')->delete();

        DB::table('bikes')->insert([
            'type' => 'e-vtt' ,
           'framSize' => 'Taille du cadre' . 'très grande',
            'framUnite' => 'Unité du cadre' . '6',
            'rimSize' => 'Taille de la jante' .'petite',
            'rimUnit' => 'Unité de la jante' .'3',
            'product_id' =>  $i,
        ]);
    }
}
