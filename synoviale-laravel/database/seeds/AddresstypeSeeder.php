<?php

use Illuminate\Database\Seeder;

class AddresstypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *AddresstypeSeeder est un complément à address
     * @return void
     */
    public function run() {
        //
        DB::table('addresstypes')->delete();
        DB::table('addresstypes')->insert([[
            'description' => 'Professionnelle',
            'company_id' => '1',
            'address_id' => '1',
        ],
                [
            'description' => 'Professionnelle',
            'company_id' => '1',
            'address_id' => '2',
        ],
                [
            'description' => 'Privée',
            'company_id' => '1',
            'address_id' => '3',
        ],
                [
            'description' => 'Privée',
            'company_id' => '1',
            'address_id' => '4',
        ]
                ]);
    }

}
