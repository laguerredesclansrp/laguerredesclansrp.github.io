<?php
session_start();
if (!$_SESSION['mdp']) {
  header('Location: connexion.php');
}
$conn = null;
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Espace d'inscription</title>
  <link rel="shortcut icon" href="https://laguerredesclansrp.com/m%C3%A9dia/PDG%20LGDC%202%20(2).ico" />
  <link rel="apple-touch-icon" href="https://laguerredesclansrp.com/m%C3%A9dia/PDG%20LGDC%202%20(2).ico" />
  <link rel="stylesheet" href="../Espace membre/miseenpage2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body>
  <header>
    <nav>
      <ul>
        <li id="logo"><a href="../index.html">LGDC RP</a></li>
        <li id="PD"><a href="../Hors RP/qui-nous-sommes.html">Qui sommes nous ?</a></li>
        <li id="PD"><a href="../Hors RP/Page Lien.html">Page lien</a></li>
        <li id="PD"><a href="../RP/RP.html">RP</a></li>
        <li id="connexion"><a href="../Espace membre/membre.php">Connexion/Espace Membre</a></li>
      </ul>
    </nav>
    </head>

    <body>
      <div id="imagePrincipale2">
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <form action="formulairePOST.php" method="POST" align="center">
          <br>
          <h3>Pseudo Discord: </h3>
          <input type="text" name="PseudoD" autocomplete="off">
          <br>
          <h3>Nombres OC : </h3>
          <input type="text" name="OC" autocomplete="off">
          <br>
          <h2>IDENTITÉ</h2>
          <br>
          <h3>Clan :</h3>
          <input type="text" name="Clan" autocomplete="off">
          <br>
          <h3>Nom Chaton :</h3>
          <input type="text" name="NomC" autocomplete="off">
          <br>
          <h3>Nom Apprenti :</h3>
          <input type="text" name="NomA" autocomplete="off">
          <br>
          <h3>Nom Guerrier :</h3>
          <input type="text" name="NomG" autocomplete="off">
          <br>
          <h3>Nom Autre :</h3>
          <input type="text" name="NomAu" autocomplete="off">
          <br>
          <h3>Grade :</h3>
          <input type="text" name="Grade" autocomplete="off">
          <br>


          <h3>Genre :</h3>
          <input type="text" name="Genre" autocomplete="off">
          <br>
          <h3>Âge :</h3>
          <input type="text" name="Age" autocomplete="off">
          <br><br>
          <h2>PHYSIQUE</h2>
          <br>
          <h3>Pelage :</h3>
          <input type="text" name="Pelage" autocomplete="off">
          <br>
          <h3>Yeux :</h3>
          <input type="text" name="Yeux" autocomplete="off">
          <br>
          <h3>Taille :</h3>
          <input type="text" name="Taille" autocomplete="off">
          <br>
          <h3>Poids :</h3>
          <input type="text" name="Poid" autocomplete="off">
          <br>
          <h3>Autre :</h3>
          <input type="text" name="Autre" autocomplete="off">

          <br><br>
          <h2>MENTAL</h2>
          <br>
          <h3>Caractère :</h3>
          <textarea name="Caractère" rows="10" cols="50"></textarea>
          <br>
          <h3>Goûts :</h3>
          <textarea name="Goût" rows="10" cols="50"></textarea>

          <br><br>
          <h2>FAMILLE</h2>

          <br>
          <h3>Mère :</h3>
          <input type="text" name="Mere" autocomplete="off">
          <br>
          <h3>Père :</h3>
          <input type="text" name="Pere" autocomplete="off">
          <br>
          <h3>Fratrie :</h3>
          <input type="text" name="Fraterie" autocomplete="off">
          <br>
          <h3>Compagnon :</h3>
          <input type="text" name="Compagnon" autocomplete="off">
          <br>
          <h3>Enfants :</h3>
          <input type="text" name="Enfant" autocomplete="off">
          <br>
          <h3>Mentor :</h3>
          <input type="text" name="Mentor" autocomplete="off">
          <br>
          <h3>Apprenti :</h3>
          <input type="text" name="Apprenti" autocomplete="off">
          <br>
          <h3>Autre :</h3>
          <input type="text" name="AutreF" autocomplete="off">
          <br><br>
          <h2>HISTOIRE</h2>
          <textarea type="text" name="Histoire" rows="10" cols="50"></textarea>
          <br>
          <h3>Image (lien) :</h3>
          <input type="text" name="Image" autocomplete="off"> -->



          <br><br><br>

          <input type="submit" name="envoi">
        </form>
        <h1><br><br><br></h1>
        <br><br><br>
    </body>

</html>