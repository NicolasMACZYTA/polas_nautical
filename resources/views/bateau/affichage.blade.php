<div class="card" style="margin-bottom:20px">
    <div class="card-header">
        <strong>Le {{ $bateau['nom'] }}</strong><br>
    </div>
    <div class="card-body" >
        <div style="float: left">
            <strong>Modèle : </strong>{{ $bateau['modele'] }}<br>
            <strong>Longueur : </strong>{{ $bateau['longueur'] }}<br>
            <strong>Largeur : </strong>{{ $bateau['largeur'] }}<br>
        </div>
        <div style="float:right">
            <a href="#"><button class="btn btn-primary">Modifier</button></a>
            <a href="#"><button class="btn btn-danger">Supprimer</button></a>
        </div>
    </div>
    <div class="card-body bg-warning">
        Actuellement dans aucun port.
    </div>
</div>


