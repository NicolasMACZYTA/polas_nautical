@empty($_SESSION['Utilisateur'])
    {!! redirect('/')!!}
@endempty

@extends('template')
@section('contenu')

    <div class="alert alert-warning" role="alert">
        <strong>Vous êtes sur le point de supprimer le bateau suivant :</strong><br>
        - Nom : {{ $bateau['nom'] }} <br> - Modèle : {{ $bateau['modele'] }}
        <div style="margin:15px" class="form-inline">
            <a href="/bateau/destroy/{{$bateau['id']}}"><button class="btn btn-danger">Confirmer</button></a>
            <a href="/utilisateur/panneau" style="margin-left:10px" class="btn btn-light">Annuler</a>
        </div>

    </div>

@endsection