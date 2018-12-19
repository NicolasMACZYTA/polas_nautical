@extends('template')

@section('contenu')

    <div class="card">
        <div class="card-header bg-primary">
            <h2>Nouveau utilisateur :</h2>
        </div>
        <div class="card-body">
            {{Form::open(['route'=>'utilisateur.store'],['class'=>'form']) }}
                <div class ="form-group">
                    {{Form::label ('login','Nom d\'utilisateur : ',
                    ['class'=>'control-label'])
                    }}
                    {{ Form::text('login',null,
                    ['class'=>'form-control input-lg',
                    'placeholder'=>'Nom d\'utilisateur'])
                    }}
                </div >
                <div class ="form-group">
                    {{ Form::label('nom','Mot de passe : ',
                    ['class'=>'control-label'])
                    }}
                    <input type="password" class="form-control input-lg" name="mot_de_passe" id="mot_de_passe">
                </div >
                <div class ="form-group">
                    {{ Form::label ('nom','Nom : ',
                    ['class'=>'control-label'])
                    }}
                    {{ Form::text('nom',null,
                    ['class'=>'form-control input-lg',
                    'placeholder'=>'Nom'])
                    }}
                </div >
                <div class ="form-group">
                    {{ Form::label('prenom','Prenom : ',
                    ['class'=>'control-label'])
                    }}
                    {{ Form::text('prenom',null,
                    ['class'=>'form-control input-lg',
                    'placeholder'=>'Prenom'])
                    }}
                </div >
                <div class ="form-group">
                    {{ Form::submit('Valider',['class'=>'btn btn-primary'])}}
                </div >
            {{ Form::close() }}
        </div>
    </div>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
@endsection
