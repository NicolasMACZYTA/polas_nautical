<?php

use Illuminate\Database\Seeder;

class EmplacementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =\Faker\Factory::create();
        foreach (range(1,30) as $index) {
            DB::table('utilisateur')->insert([
                'nom' => $faker->company,
                'ville' => $faker->city
            ]);
        }
    }
}
