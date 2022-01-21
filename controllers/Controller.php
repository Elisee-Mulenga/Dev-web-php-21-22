<?php 
    // recuperation des données
        // $_POST
        // $_GET
        // $_SERVER info sur le serveur
        // $name = $_POST['name'];
        // echo $name;
    // verifications des données

        if (isset ($_POST['name'] ) ) {
            $name = $_POST['name'];
            echo "Bonjour Mr.".$name;
        } else {
            echo "Désolé cette clé n'existe pas !";
        }
    // la fonction issert () : permet de verifier si une valeur possede une clé


?>
