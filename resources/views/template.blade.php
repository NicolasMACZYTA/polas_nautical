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
    <div class="card">
        <div class="card-header">
            test
        </div>
    </div>
    </div>
    <div id="contenu">
        @yield('contenu')
    </div>

    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</body>
</html>