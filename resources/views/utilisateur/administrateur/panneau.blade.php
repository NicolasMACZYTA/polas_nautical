@extends('utilisateur.panneau_template')

@section('navcontent')
    <li class="nav-item">
        <a class="nav-link" href="/port/creer">Ajouter un port</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Declaration entretien</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Utilisateurs</a>
    </li>
@endsection

@section('titre')
    Les ports :

@endsection

@section('panneau_contenu')
    {!!  \App\Http\Controllers\PortController::index()!!}
@endsection