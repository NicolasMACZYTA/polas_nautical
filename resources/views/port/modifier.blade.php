@empty($_SESSION['Utilisateur'])
    {!! redirect('/')!!}
@endempty


@extends('template')

@section('contenu')

    <div class="card">
        <div class="card-header">
            <h2>Modifier un port :</h2>
        </div>
        <div class="card-body">
            {!! Form::model($port ,
            [
            'method'=>'put',
            'route'=>[ 'port.update', $port->id],
            'class'=>'form'
            ]) !!}
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
                {{ Form::label ('ville','Ville : ',
                ['class'=>'control-label'])
                }}
                {{ Form::text('ville',null,
                ['class'=>'form-control input-lg',
                'style'=>'width:300px',
                'placeholder'=>'Ville du port'])
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