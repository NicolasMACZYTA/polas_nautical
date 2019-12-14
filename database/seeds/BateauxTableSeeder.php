<?php

use Illuminate\Database\Seeder;

class BateauxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =\Faker\Factory::create();
        foreach (range(1,10) as $index){
            DB::table('bateaux')->insert([
                'nom' => $faker->name,
                'modele' => $faker->sentence(2) ,
                'longueur'=> $faker->randomFloat(2 ,0 ,15) ,
                'largeur' => $faker->randomFloat(2 ,0 ,5) ,
                'id_proprietaire' =>$faker->randomFloat(0,1,20),
                'id_port' =>$faker->randomFloat(0,1,20)
            ]);
        }
    }
}
