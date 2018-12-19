<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Utilisateur;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return('utilisateur.liste');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utilisateur.creation');
    }

    /**
     * Affiche un formulaire de connexion
     */
    public function deconnexion(){
        unset($_SESSION['Utilisateur']);
        return redirect('/');
    }

    /*
     * Vérifie les infos
     */
    public function verification(Request $request){
        $utilisateur = Utilisateur::where('login', $request->login)->where('mot_de_passe', $request->mot_de_passe)->first();

        if ( !$utilisateur == null)
        {
            $_SESSION['Utilisateur'] = $utilisateur;
            return redirect('/');
        }
        else{
            return redirect('/');
        }
    }

    public function store(Request $request)
    {
        $utilisateur = Utilisateur::create(
            $request->input()
        );
        flash('Nouveau utilisateur enregistré')->success();
        return redirect()->route('utilisateur.show',['utilisateur'=>$utilisateur]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('utilisateur.panneau_utilisateur');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
