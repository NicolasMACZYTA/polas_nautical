@extends('template')

@section('contenu')
    <p>Ceci est une page d'accueil blablabla propulsion de pigeon V---------------L</p>
    <div class="card">
        <div class="card-header">
            LESSS BATTEAUUUUUXXXXX
            <?php
                echo $_SESSION['Test'];

            ?>
        </div>
        <div class="card-body">
            <p>pouf</p>
        </div>
    </div>


@endsection
