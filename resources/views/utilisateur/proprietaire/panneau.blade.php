@extends('utilisateur.panneau_template')

@section('navcontent')
    <li class="nav-item">
        <a class="nav-link" href="#">Ajouter un bateau</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Demandes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Demandes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Demandes</a>
    </li>
@endsection

@section('titre')
    Mes bateaux :

@endsection

@section('panneau_contenu')
    {!!  \App\Http\Controllers\BateauxController::index()!!}
@endsection