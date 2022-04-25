<?php

require_once './modelestation.php';

$station = new ModeleStation();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET') {
    $login = filter_input(INPUT_GET, "login");
    $password = filter_input(INPUT_GET, "mdp");
    $good = FALSE;
    $good = $station->verifAdmin($login, $password);
    if($good == TRUE){
        header("Location: ../admin/adminpage.php");
    } else {
        header("Location: ../connexionError.html");
    }
}