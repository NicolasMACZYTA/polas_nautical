@extends('utilisateur.panneau_template')

@section('navcontent')
    <li class="nav-item">
        <a class="nav-link" href="/bateau/creer">Creer bateau</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Declaration entretiens</a>
    </li>
@endsection

@section('titre')
    Liste des bateaux

@endsection

@section('panneau_contenu')
    {!!  \App\Http\Controllers\BateauxController::index()!!}
@endsection