<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Bateaux;

class BateauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $resultat = DB::table('bateaux')->where('id_proprietaire',$_SESSION['Utilisateur']['id'])->get();
        $resultat = $resultat->toArray();
        if(empty($resultat)){
            echo "<div class=\"alert alert-danger\" role=\"alert\">
        <strong>Vous ne possedez aucun bateau !</strong><br>
        - Vous pouvez ajouter un de vos bateau dans le menu de gauche.
        </div>";
        }
        foreach($resultat as $i){
            $bateau = json_decode(json_encode($i), true);
            echo view('bateau.affichage', [
                'bateau' => $bateau
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bateau.creation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bateau = Bateaux::create(
            $request->input()
        );
        return redirect('/utilisateur/panneau');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bateau = DB::table('bateaux')->where('id',$id);
        return view('bateau.affichage')
            ->with('bateaux', $bateau);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bateau = DB::table('bateaux')->where('id',$id)->get();
        return view ('bateau.modifier')-> with('bateau',$bateau[0] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Bateaux $bateau)
    {
        print_r($bateau);
        $bateau->update(
            $request->input()
        );

        //return redirect ('/utilisateur/panneau');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function supprimer($id){
        $bateau = db::table('bateaux')->where('id',$id)->get();
        $bateau = json_decode(json_encode($bateau[0]), true);
        echo view('bateau.supprimer', [

            'bateau' => $bateau
        ]);
    }

    public function destroy($id)
    {
        DB::table('bateaux')->where('id',$id)->delete();
        return redirect('/utilisateur/panneau');
    }
}
