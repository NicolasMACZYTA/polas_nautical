<?php
class utilisateur{
    private $login;
    private $password;
    private $id;
    const nomSession = "Connexion";

    public function __construct($login, $mdp, $id=NULL)
    {
        $this -> id = $id;
        $this -> login = $login;
        $this -> password = $mdp;
    }

    public function getLogin(){
        return $this -> login;
    }
    public function getPassword(){
        return $this -> password;
    }
    public function getID(){
        return $this -> id;
    }

    public function __toString()
    {
        return $this->login.";".$this->password.";".$this->id;
    }


    public function afficherForm()
    {
			echo <<<END
                <input type="text" name="login" placeholder="Votre Identifiant" required>
                <input type="password" name="mdp" placeholder="Votre mot de passe" required>
                <button type="submit" >S'identifier</button>
END;
    }

    public function afficherFormInscription()
    {
        echo <<<END
                <input type="text" name="login" placeholder="Votre Identifiant" required>
                <input type="password" name="mdp" placeholder="Votre mot de passe" required>
                <input type="password" name="mdp2" placeholder="Confirmer votre mot de passe" required>
                <button type="submit" >S'inscrire</button>
END;
    }

    public function fromForm()
    {
        return new utilisateur($_POST['username'], $_POST['mdp']);
    }




    public function connexion($user)
    {
        $_SESSION[self::nomSession]=$user;
    }

    public function  estConnecte()
    {
        return (isset($_SESSION[self::nomSession]));
    }

    public function deconnexion()
    {
        unset($_SESSION[self::nomSession]);
    }
}


?>