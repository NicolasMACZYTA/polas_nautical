<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Port;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $resultat = DB::table('port')->get();
        $resultat = $resultat->toArray();
        if(empty($resultat)){
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                <strong>Aucun port dans la base !</strong><br>
            </div>";
        }
        foreach($resultat as $i){
            $port = json_decode(json_encode($i), true);
            echo view('port.affichage', [
                'port' => $port
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
        return view('port.creation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function supprimer($id){
        $port = db::table('port')->where('id',$id)->get();
        $port = json_decode(json_encode($port[0]), true);
        echo view('port.supprimer', [

            'port' => $port
        ]);
    }

    public function store(Request $request)
    {
        $port = Port::create(
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $port = DB::table('port')->where('id',$id)->get();
        return view ('port.modifier')-> with('port',$port[0] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Port $port)
    {
        $port->update(
            $request->input()
        );

        return redirect ('/utilisateur/panneau');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('port')->where('id',$id)->delete();
        return redirect('/utilisateur/panneau');
    }
}
