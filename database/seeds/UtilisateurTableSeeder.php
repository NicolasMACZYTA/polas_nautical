<?php

use Illuminate\Database\Seeder;

class UtilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =\Faker\Factory::create();
        foreach (range(1,30) as $index){
            DB::table('utilisateur')->insert([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName ,
                'login'=> $faker->userName ,
                'mot_de_passe' => $faker->password ,
                'id_droit'=>'1'
            ]);
        }
    }
}
