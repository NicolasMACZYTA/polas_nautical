<div class="card" style="margin-bottom:20px">
    <div class="card-header">
        <strong>Port  {{ $port['nom'] }}</strong><br>
    </div>
    <div class="card-body" >
        <div style="float: left">
            <strong>Ville : </strong>{{ $port['ville'] }}<br>
        </div>
        <div style="float:right">
            <a href="#"><button class="btn btn-primary">Modifier</button></a>
            <a href="/port/supprimer/{{$port['id']}}"><button class="btn btn-danger">Supprimer</button></a>

        </div>
    </div>
    <div class="card-body bg-info">
        Liste des emplacements.
    </div>

</div>