<div style="float:right" class="custom-control-inline">
    <form method="GET" class="form-inline" action="http://localhost/utilisateur/connexion" accept-charset="UTF-8">
        <div class ="form-group" style="margin-left:15px">
            {{Form::label ('login','Nom d\'utilisateur : ',
            ['class'=>'control-label'])
            }}
            {{ Form::text('login',null,
            ['class'=>'form-control input-lg',
            'placeholder'=>'Nom d\'utilisateur','style'=>'margin-left:15px'])
            }}
        </div >
        <div class ="form-group" style="margin-left:10px">
            {{ Form::label('nom','Mot de passe : ',
            ['class'=>'control-label'])
            }}
            <input type="password" class="form-control input-lg" name="mot_de_passe" id="mot_de_passe" style="margin-left:10px">
        </div >
        <div class ="form-group" style="margin-left:15px">
            {{ Form::submit('Connexion',['class'=>'btn btn-primary'])}}
        </div >
    </form>
    <form action="/utilisateur/creer" method="get" style="margin-left: 15px">
        <input type="submit" class="btn" value="Inscription">
    </form>
</div>
