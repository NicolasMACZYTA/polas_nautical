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
        DB::table('utilisateur')->insert([
            'nom' => "Admin",
            'prenom' =>"Istrateur",
            'login'=> "Admin" ,
            'mot_de_passe' => "Admin" ,
            'id_droit'=>'3'
        ]);
        DB::table('utilisateur')->insert([
            'nom' => "Gestion",
            'prenom' => "Naire" ,
            'login'=> "Gestion" ,
            'mot_de_passe' => "Gestion" ,
            'id_droit'=>'2'
        ]);
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
