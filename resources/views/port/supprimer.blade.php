@empty($_SESSION['Utilisateur'])
    {!! redirect('/')!!}
@endempty
@isset($_SESSION['Utilisateur'])
    @if($_SESSION['Utilisateur']['id_droit']!=3)
        {!! redirect('/')!!}
    @endif
@endisset
@extends('template')
@section('contenu')

    <div class="alert alert-warning" role="alert">
        <strong>Vous êtes sur le point de supprimer le port suivant :</strong><br>
        - Port de {{ $port['nom'] }} à {{ $port['ville'] }}
        <div style="margin:15px" class="form-inline">
            <form class="form" method="post" action="/utilisateur/destroy/{{$port['id']}}">
            <input type="Submit" value="Confirmer" class="btn btn-danger">
            {{Form::close()}}
            <a href="/utilisateur/panneau" style="margin-left:10px" class="btn btn-light">Annuler</a>
        </div>

    </div>

@endsection