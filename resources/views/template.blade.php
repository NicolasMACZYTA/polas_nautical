<?php
    use App\Http\Controllers\UtilisateurController;
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    @yield('meta')
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div id="head">
            
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <h3>OMONBATOÔO</h3>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/utilisateur/panneau">Panneau de contrôle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            @isset($_SESSION['Utilisateur'])
                @include('utilisateur.afficher')
            @endisset
            @empty($_SESSION['Utilisateur'])
                @include('utilisateur.connexion')
            @endempty
        </nav>
    </div>

    <div id="contenu" style="margin: 15px">
        @yield('nav')
        @yield('contenu')
    </div>
    <footer class="page-footer font-small jumbotron pt-4">
        <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase">Contacts</h5>
            <p>Téléphone : 03 25 12 34 56</br>
            FAX : 03 25 12 34 57</br>
            Mail : contact.omonbatooo@caramail.fr</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">



            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Liens</h5>

            <ul class="list-unstyled">
                <li>
                <a class="nav-link" href="/">Acceuil <span class="sr-only">(current)</span></a>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright: N.Maczyta, P.Page.
        </div>
        <!-- Copyright -->

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>