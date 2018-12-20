<?php

use Illuminate\Database\Seeder;

class PortTableSeeder extends Seeder
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
            DB::table('port')->insert([
                'nom' => $faker->company,
                'ville' => $faker->city
            ]);
        }
    }
}
