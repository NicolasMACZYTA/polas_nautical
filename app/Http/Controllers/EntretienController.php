<?php

namespace bateaux_v3\Http\Controllers;

use Illuminate\Http\Request;
use bateaux_v3\Http\Controllers\Controller;

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return('entretien.liste');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entretien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Entretien = Entretien::create(
            $request->input()
        );
        flash('Nouvel entretien enregistré')->success();
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
        $entretien = DB::table('entretien')->where('id',$id);
        return view('entretien.affichage')
                ->with('entretien',$entretien);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bateau = DB::table('entretien')->where('id',$id)->get();
        return view('entretien.modifier')->with('bateau',$entretien[0]);
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
        $entretien->update(
            $request->input()
        );

        return redirect('utilisateur/panneau');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('entretien')->where('id',$id)->delete();
        return redirect('/utilisateur/panneau');
    }
}
