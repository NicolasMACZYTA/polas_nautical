<?php
include "MyPDO.class.php";
include "utilisateur.class.php";


class utilisateurModel{
    private $DB = MyPDO::getInstance();
    public function arrayToUser($table){
        return new utilisateur($table['username'], $table['password'], $table['ID_KEY']);
    }

    public function verification() //  DB PDO (objet)
    {
        $SQL="SELECT * FROM utilisateur WHERE username=:login AND password=:mdp";
        if($requete = $DB->prepare($SQL)){
            if($requete->execute(array(":login"=>$this -> login, ":mdp"=>$this -> password))){
                if($res=$requete->fetch(PDO::FETCH_ASSOC)){ //While pour une requete à plusieurs enregistrement car fetch renvoie null quand il n'y a plus de réponse
                    return (true);
                }
                else{return false;}
            }else{echo "Erreur : ligne 39 Requète non exécutée";}
        }
        else{echo "Erreure inconnu ligne 36";}
    }

    public function create($user) //  Renvoie False si l'utilisateur existe déja, sinon il l'inscrit et renvoie true
    {
        $SQL="SELECT * FROM utilisateur WHERE username=:login";
        if($requete = $DB->prepare($SQL)){
            if($requete->execute(array(":login"=>$user.getLogin()))){
                if($res=$requete->fetch(PDO::FETCH_ASSOC)){ //While pour une requete à plusieurs enregistrement car fetch renvoie null quand il n'y a plus de réponse
                    return (false); // On a trouver une entrée avec le même nom d'utilisateur.
                }
                else{
                    $SQL = "INSERT INTO `utilisateur` (`ID_KEY`, `Username`, `Password`) VALUES (NULL, :login, :mdp);";
                    if($requete = $DB->prepare($SQL)){
                        if($requete->execute(array(":login"=>$user.getLogin(), ":mdp"=>$user.getPassword))){
                            return(true);//On a enregistré ce nouvel utilisateur dans la BDD
                        }
                    }

                }
            }else{echo "Erreur : ligne 39 Requète non exécutée";}
        }
        else{echo "Erreure inconnu ligne 36";}
    }
}