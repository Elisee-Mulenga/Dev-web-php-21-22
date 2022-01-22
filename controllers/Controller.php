<?php 
    // recuperation des données
        // $_POST
        // $_GET
        // $_SERVER info sur le serveur
        // $name = $_POST['name'];
        // echo $name;
    // verifications des données

        if (isset ($_POST['name'])) {
            $name = $_POST['name'];
            echo "NOM : ".$name ."<br>"; }
        if (isset ($_POST['lastname'])) {
            $lastname = $_POST['lastname'];
            echo "POST-NOM : ".$lastname ."<br>"; }
        if (isset ($_POST['nickname'])) {
            $nickname = $_POST['nickname'];
            echo "PRENOM : ".$nickname ."<br>"; }
        if (isset ($_POST['idname'])) {
            $idname = $_POST['idname'];
            echo "MATRICULE : ".$idname ."<br>"; }
        if (isset ($_POST['promo'])) {
            $promo = $_POST['promo'];
            echo "PROMOTION : ".$promo ."<br>"; }
        if (isset ($_POST['mail'])) {
            $mail = $_POST['mail'];
            echo "Mail : ".$mail ."<br>"; }
        else {
            echo "Désolé cette clé n'existe pas !";
        }
    // la fonction issert () : permet de verifier si une valeur possede une clé
?>

