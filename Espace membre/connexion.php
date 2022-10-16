<?php
session_start();
$bdd = new PDO( 'mysql:host=localhost;dbname=u623834937_espace_membres;charset=UTF8', 'u623834937_discord', 'lgdcRP<1' );
    if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){ 
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));

        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: membre.php');
        }else{
            echo"Votre mot de passe ou pseudo est incorrect";
        }

    }else{
        echo "Veuillez compléter tous les champs ...";
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="miseenpage.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>


    </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li id="logo"><a href="../index.html">LGDC RP</a></li>
          <li id="PD"><a href="../Hors RP/qui-nous-sommes.html">Qui sommes nous ?</a></li>
          <li id="PD"><a href="../Hors RP/Page Lien.html">Page Lien</a></li>
          <li id="PD"><a href="../RP/RP.html">RP</a></li>
          <li id="connexion"><a href="../Espace membre/membre.php">Connexion/Espace Membre</a></li>
        </ul>
      </nav>

    
</head>
<body>
<section id="imagePrincipale2">
<div id="imagefond">
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <form method="POST" action="" align ="center">
        <br><br><br>
        <input type="text" name="pseudo" autocomplete="off">
        <br><br>
        <input type="password" name="mdp" autocomplete="off">

        <br><br>

        <input type="submit" name="envoi">
<h1><br><br><br></h1>
<br><br><br>
    </form>
    </section>
</body>
</html>