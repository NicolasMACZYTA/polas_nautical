<?php

use Illuminate\Database\Seeder;

class DroitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('droit')->insert([
            'nom' => 'proprietaire'
        ]);
        DB::table('droit')->insert([
            'nom' => 'gestionnaire'
        ]);
        DB::table('droit')->insert([
            'nom' => 'administrateur'
        ]);
    }
}
