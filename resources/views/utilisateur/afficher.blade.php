<?php
    echo "<div style=\"margin-right:20px\">Bienvenue, ".$_SESSION['Utilisateur']['nom']." ".$_SESSION['Utilisateur']['prenom'];
    if($_SESSION['Utilisateur']['id_droit']==3){
        echo " (<strong>Administrateur</strong>) ";
    }
    elseif($_SESSION['Utilisateur']['id_droit']==2){
        echo " (<strong>Gestionnaire</strong>) ";
    }
    else{
        echo " (<strong>Propriétaire</strong>) ";
    }
    echo "</h6></div>"
?>
<form action="/utilisateur/deconnexion" method="get">
    <input type="submit" class="btn btn-secondary" value="Déconnexion">
</form>

