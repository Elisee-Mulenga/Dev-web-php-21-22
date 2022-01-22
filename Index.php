<!DOCTYPE html>
<html lang="fr">
<html>
  <head>
    <title>Elisée - Exercices</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 12px;
      color: #eee;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 15px;
      color: #0EBCDC;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgb(32,203,224); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 80px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #000809;
      }
      .btn-item {
      display: inline-block;
      margin: 15px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #3F49DA;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
        <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>L2 GENIE LOGICIEL SYSTEME D'INFORMATION</h1>
        <p>Esis ne peut pas aller de l'avant sans cette filière car SI est la force qui permet à ESIS d'être compter parmi les grandes univercités de ce monde!</p>
        <div class="btn-group">
          <a class="btn-item" href="https://www.w3docs.com/learn-php/php-comments.html">Apprendre du PHP</a>
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
          Promotion<input class="promotion" type="text" name="prom">
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