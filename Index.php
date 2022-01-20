<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURS PHP</title>
</head>
<body>
    <form>
        Nom : <input type= "text" name="le nom"> <br>
        post-nom : <input type= "text" name="pst nom"> <br>
        Prenom : <input type= "text" name="prenom"> <br>
        Matricule : <input type= "text" name="mat"> <br>
        Genre : <input type= "text" name="sexe"> <br>
        Promotion : <input type= "text" name="promotion"> <br>
        Email : <input type= "text" name="adresse"> <br>
        <button type="submit">Submit</button>
        <form method="post" action="traitement.php">
        <p>
            <label>Votre pseudo</label> : <input type="text" name="pseudo" id="pseudo" />
        </p>
    </form>
</body>
</html>
