<!DOCTYPE html>
<html lang="fr">
<head>
    @yield('meta')
    <meta charset="UTF-8">

</head>
<body>
    <div id="head">
        <div id="bandeau" style="background-color:#6fadff;height:100px;width:100%">

        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Panneau de contrôle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Identifiant" aria-label="Search">
                <input class="form-control mr-sm-2" type="password"  aria-label="Search">
                <button class="btn btn-outline-success my-2" type="submit">Connection</button>
            </form>
        </nav>
    </div>
    <div id="contenu" style="margin: 15px">
        @yield('contenu')
    </div>

    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</body>
</html>