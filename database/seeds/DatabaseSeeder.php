<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DroitTableSeeder::class);
        $this->call(UtilisateurTableSeeder::class);
        $this->call(BateauxTableSeeder::class);
    }
}
