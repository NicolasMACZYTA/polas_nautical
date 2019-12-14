@empty($_SESSION['Utilisateur'])
    {!! redirect('/')!!}
@endempty


@extends('template')

@section('contenu')

    <div class="card">
        <div class="card-header">
            <h2>Créer un utilisateur :</h2>
        </div>
        <div class="card-body">
            {{Form::open(['route'=>'bateaux.store'],['class'=>'form']) }}
            <div class ="form-group">
                {{Form::label ('nom','Nom : ',
                ['class'=>'control-label'])
                }}
                {{ Form::text('nom',null,
                ['class'=>'form-control input-lg',
                'style'=>'width:300px',
                'placeholder'=>'Nom du bateau'])
                }}
            </div >
            <div class ="form-group">
                {{ Form::label ('modele','Modèle : ',
                ['class'=>'control-label'])
                }}
                {{ Form::text('modele',null,
                ['class'=>'form-control input-lg',
                'style'=>'width:300px',
                'placeholder'=>'Modèle du bateau'])
                }}
            </div >
            <div class ="form-group">
                {{ Form::label('longueur','Longueur : ',
                ['class'=>'control-label'])
                }}
                <div class="input-group mb-3" style="width: 150px">
                    <input name="longueur" type="number" class="form-control" placeholder="Longueur" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"> m </span>
                    </div>
                </div>
            </div >
            <div class ="form-group">
                {{ Form::label('largeur','Largeur : ',
                ['class'=>'control-label'])
                }}
                <div class="input-group mb-3" style="width: 150px">
                    <input name="largeur" type="number" class="form-control" placeholder="Largeur" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"> m </span>
                    </div>
                </div>
            </div >
            <div class ="form-group">
                {{ Form::submit('Valider',['class'=>'btn btn-primary'])}}
            </div >
            <input type="hidden" name="id_proprietaire" value="<?php echo $_SESSION['Utilisateur']['id'];?>">
            <input type="hidden" name="id_port" value="1">
            {{ Form::close() }}
        </div>
    </div>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
@endsection