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
                'longueur'=> $faker->randomFloat(2 ,0 ,15) ,
                'largeur' => $faker->randomFloat(2 ,0 ,5) ,
                'id_gestionnaire'=> 2 ,
                'id_port' => $faker->randomFloat(2 ,0 ,5) ,
            ]);
        }
    }
}
