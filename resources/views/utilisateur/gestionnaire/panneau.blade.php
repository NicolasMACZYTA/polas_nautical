@extends('utilisateur.panneau_template')

@section('navcontent')
    <li class="nav-item">
        <a class="nav-link" href="/bateau/creer">Ajouter un emp</a>
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
    Mes emplacements :

@endsection

@section('panneau_contenu')
    {!!  \App\Http\Controllers\EmplacementController::index()!!}
@endsection