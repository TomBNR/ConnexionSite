<?php

require_once './modele.php';

class ModeleStation extends Modele {

    public function verifAdmin($loginSaisi, $passwordSaisi) {

        $requete = $this->_bdd->prepare("SELECT * FROM Users");
        $requete->execute();
        $users = $requete->fetchAll();
        
        $good = FALSE;

        foreach ($users as $user) {

            echo "<b>BDD</b><br/>login bdd : " . $user['Login'] . "<br/> password bdd : " . $user['Password'] . "<br/><br/>";
            echo "<b>Saisi</b><br/>login saisi : " . $loginSaisi . '<br/> password saisi : ' . $passwordSaisi . "<br/><br/>";

            if ($user['Login'] == $loginSaisi && $user['Password'] == $passwordSaisi) {
                $good = TRUE;
            }
        }
        return $good;
    }

}
