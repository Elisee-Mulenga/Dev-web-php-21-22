<!DOCTYPE html>
<html lang="fr">
<html>
  <head>
    <title>Elisée - COURS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-graduation-cap"></i>
            <h1>L2 GENIE LOGICIEL SYSTEME D'INFORMATION</h1>
            <p>Esis ne peut pas aller de l'avant sans cette filière car SI est la force qui permet à ESIS d'être compter parmi les grandes univercités de ce monde!</p>
            <div class="btn-group">
              <a class="btn-item" href="https://www.w3docs.com/learn-php/php-syntax.html">Apprendre du PHP</a>
            </div>
        </div>
      <form method="post" action="controllers/Controller.php">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Formulaire d'identité</h2>
        </div>
        <div class="info">
          Nom<input class="fname" type="text" name="name">
          Post-nom<input class="lname" type="text" name="lastname">
          Prénom<input class="nname" type="text" name="nickname">
          Matricule<input class="mat" type="text" name="idname">
          Sexe<select>
                <option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
            </select>
          Promotion<input class="promotion" type="text" name="promo">
          Adresse mail<input class="mail" type="text" name="mail">
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>Je certifie que ces informations sont vraies et sincères</span>
        </div>
        <button type="submit" href="/">Envoyer</button>
      </form>
    </div>
  </body>
</html>
