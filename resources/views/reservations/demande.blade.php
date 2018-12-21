@extends('template')

@section('contenu')

    <div class="card">
        <div class="card-header">
            <h2>nouvelle demande de reservaion</h2>
        </div>
        <div class="card-body">
            {{Form::open(['route'=>'reservation.store'],['class'=>'form']) }}
                <div class ="form-group">
                    {{Form::label ('login','date de début : ',
                    ['class'=>'control-label'])
                    }}
                    {{ Form::text('login',null,
                    ['class'=>'form-control input-lg',
                    'style'=>'width:300px',
                    'placeholder'=>'JJ/MM/AAA'])
                    }}
                </div >
                <div class ="form-group">
                    {{ Form::label('nom','date de fin : ',
                    ['class'=>'control-label'])
                    }}
                    <input class="form-control" style="width:300px" input-lg name="mot_de_passe" id="mot_de_passe" placeholder="JJ/MM/AAAA">
                </div >
                <div class ="form-group">
                    {{ Form::label ('nom','Nom : ',
                    ['class'=>'control-label'])
                    }}
                    {{ Form::text('nom',null,
                    ['class'=>'form-control input-lg',
                    'style'=>'width:300px',
                    'placeholder'=>'Nom'])
                    }}
                </div >
                <div class ="form-group">
                    {{ Form::label('prenom','Prenom : ',
                    ['class'=>'control-label'])
                    }}
                    {{ Form::text('prenom',null,
                    ['class'=>'form-control input-lg',
                    'style'=>'width:300px',
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
