<?php 
    // recuperation des données
        // $_POST
        // $_GET
        // $_SERVER info sur le serveur
        // $name = $_POST['name'];
        // echo $name;
    // verifications des données

        // if (isset ($_POST['name'])) {
        //     $name = $_POST['name'];
        //     echo "NOM : ".$name ."<br>"; }
        // if (isset ($_POST['lastname'])) {
        //     $lastname = $_POST['lastname'];
        //     echo "POST-NOM : ".$lastname ."<br>"; }
        // if (isset ($_POST['nickname'])) {
        //     $nickname = $_POST['nickname'];
        //     echo "PRENOM : ".$nickname ."<br>"; }
        // if (isset ($_POST['idname'])) {
        //     $idname = $_POST['idname'];
        //     echo "MATRICULE : ".$idname ."<br>"; }
        // if (isset ($_POST['sxname'])) {
        //     $sxname = $_POST['sxname'];
        //     echo "SEXE : ".$sxname ."<br>"; }
        // if (isset ($_POST['promo'])) {
        //     $promo = $_POST['promo'];
        //     echo "PROMOTION : ".$promo ."<br>"; }
        // if (isset ($_POST['mail'])) {
        //     $mail = $_POST['mail'];
        //     echo "Mail : ".$mail ."<br>"; }
        // else {
        //     echo "Désolé cette clé n'existe pas !";
        // }

    // if (isset($_POST['name']) && (isset($_POST['lastname']) && (isset($_POST['nickname']) && (isset($_POST['idname']) && (isset($_POST['sxname']) && (isset($_POST['promo']) && (isset($_POST['mail']) ) {
        //     echo 'NOM : '.$POST['name']. ' '.$_POST['lastname'].' '.$_POST['nickname'].'<br>';
        //     echo 'PROMOTION : '.$_POST['promo'].'<br>';
        //     echo 'MATRICULE : ' .$_POST['idname'] . "<br>";
        //     echo "GENRE : " .$_POST['sxname'] . "<br>";
        //     echo "MAIL : " .$_POST['mail'] . "<br>";
        // } 
        // else {
        //     echo "Sorry ! la clé renseignée n'est pas valide...";
        // }
    // la fonction issert () : permet de verifier si une valeur possede une clé
?>

<?php 

    echo "Nom :".$_GET['name'];
    echo "<br> Post nom :".$_GET['lastname'];
    echo "<br> Prenom :".$_GET['nickname'];
    echo "<br> Matricule :".$_GET['idname'];
    echo "<br> Sexe :".$_GET['sxname'];
    echo "<br> Mail :".$_GET['promo'];
    echo "<br> Mail :".$_GET['mail'];
 ?>

