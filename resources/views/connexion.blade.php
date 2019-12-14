@extends('template')

@section('contenu')
    <h1 class="display-4">Bienvenue</h1>
     <div class="card-group">
        <div class="card">
            <div class="card-header bg-info">
                <strong>Propriétaire</strong>
            
            </div>
                <div class="card-body">
                    <p>En tant que propriétaire, ce site vous permet d'inscrire vos bateaux, et de fiare des reservations d'emplacement</p>
                </div>
            </div>
        <div class="card">
        <div class="card-header bg-info">
            <strong>Gestionnaire</strong>
            
            </div>
                <div class="card-body">
                    <p>L'espace gestionnaire permet de gerer les demandes de reservation</p>
                </div>
            </div>
        <div class="card">
        <div class="card-header bg-info">
            <strong>Administrateur</strong>
            
            </div>
                <div class="card-body">
                    <p>L'administrateur peut tout contrôler, c'est a lui qu'il faut casser les pieds par mail si quelsue chose ne va pas</p>
                </div>
            </div>
    </div>
    <p><br>Toutes ces actions sont disponibles dans le Panneau de contrôle</p>


@endsection
