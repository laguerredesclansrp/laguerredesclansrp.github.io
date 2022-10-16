<?php
session_start();
if (!$_SESSION['mdp']) {
    header('Location: connexion.php');
}

$PseudoD1 = $_POST["PseudoD"];
$OC = $_POST["OC"];
$Clan = $_POST["Clan"];
$NomC = $_POST["NomC"];
$NomA = $_POST["NomA"];
$NomG = $_POST["NomG"];
$NomAu = $_POST["NomAu"];
$Grade = $_POST["Grade"];
$Genre = $_POST["Genre"];
$Age = $_POST["Age"];
$Pelage = $_POST["Pelage"];
$Yeux = $_POST["Yeux"];
$Taille = $_POST["Taille"];
$Poid = $_POST["Poid"];
$Autre1 = $_POST["Autre"];
$Caractère1 = $_POST["Caractère"];
$Goût1 = $_POST["Goût"];
$Mere = $_POST["Mere"];
$Pere = $_POST["Pere"];
$Fraterie = $_POST["Fraterie"];
$Compagnon = $_POST["Compagnon"];
$Enfant = $_POST["Enfant"];
$Mentor = $_POST["Mentor"];
$Apprenti = $_POST["Apprenti"];
$AutreF1 = $_POST["AutreF"];
$Histoire1 = $_POST["Histoire"];
$Image1 = $_POST["Image"];
$Histoire = str_replace("'", "&#8216;", $Histoire1);
$PseudoD = str_replace("'", "&#8216;", $PseudoD1);
$Autre = str_replace("'", "&#8216;", $Autre1);
$Caractère = str_replace("'", "&#8216;", $Caractère1);
$Goût = str_replace("'", "&#8216;", $Goût1);
$AutreF = str_replace("'", "&#8216;", $AutreF1);
$Image = str_replace("'", "&#8216;", $Image1);


$servername = "localhost";
$username = "u623834937_discord";
$password = "lgdcRP<1";
$dbname = "u623834937_espace_membres";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `u623834937_espace_membres`.`Compte` (`id`, `pseudo`, `mdp`, `PseudoD`, `OC`, `Clan`, `NomC`, `NomA`, `NomG`, `NomAu`, `Grade`, `Genre`, `Age`, `Pelage`, `Yeux`, `Taille`, 
    `Poid`, `Autre`, `Caractère`, `Goût`, `Mere`, `Pere`, `Fraterie`, `Compagnon`, `Enfant`, `Mentor`, `Apprenti`, `AutreF`, `Histoire`, `Image`) 
    VALUES (NULL, '', '', '$PseudoD', '$OC', '$Clan', '$NomC', '$NomA', '$NomG', '$NomAu', '$Grade', '$Genre', '$Age', '$Pelage', '$Yeux',
     '$Taille', '$Poid', '$Autre', '$Caractère', '$Goût', '$Mere', '$Pere', '$Fraterie', '$Compagnon', '$Enfant', '$Mentor', '$Apprenti', '$AutreF', '$Histoire','$Image')";

    // use exec() because no results are returned
    $bdd->exec($sql);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

?>
<!-- $conn = new PDO('mysql:host=localhost;dbname=espace_membres;charset=UTF8', 'root', ''); -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">

    <title>Inscription fin</title>
    <link rel="shortcut icon" href="https://laguerredesclansrp.com/m%C3%A9dia/PDG%20LGDC%202%20(2).ico" />
    <link rel="apple-touch-icon" href="https://laguerredesclansrp.com/m%C3%A9dia/PDG%20LGDC%202%20(2).ico" />
    <link rel="stylesheet" href="miseenpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
        h6 {
            text-decoration: underline;
        }
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
                <li id="connexion"><a href="../Espace membre/connexion.php">Connexion</a></li>
            </ul>
        </nav>
        <div id="imagePrincipale">
            <h1>Inscription Réussi</h1>

        </div>

    </header>
    <section id="presentation">
        <div id="texteIntro">
            <h2>Pour rejoindre le pannel admin, cliquez <a href="espace_admin.php">ICI</a>

                <br><br> <br><br>

                Compte rendu :
            </h2>
            <br><br>
            <h6>Combientième OC : <h3><?php echo $OC; ?> </h3>
            </h6>



            <h5>IDENTITÉ :</h5>
            <h6>Nom : </h6>
            <h3><?php echo $NomC ?> - <?php echo $NomA ?> - <?php echo $NomG ?> - <?php echo $NomAu ?> <br><br></h3>
            <h6>Clan : </h6>
            <h3><?php echo $Clan ?></h3>
            <h6>Grade : </h6>
            <h3><?php echo $Grade ?></h3>
            <h6>Genre : </h6>
            <h3><?php echo $Genre ?></h3>
            <h6>Âge : </h6>
            <h3><?php echo $Age ?></h3>
            <br>

            <h5>PHYSIQUE :</h5>
            <h6>Pelage : </h6>
            <h3><?php echo $Pelage ?></h3>
            <h6>Yeux : </h6>
            <h3><?php echo $Yeux ?></h3>
            <h6>Taille : </h6>
            <h3><?php echo $Taille ?></h3>
            <h6>Poids : </h6>
            <h3><?php echo $Poid ?></h3>
            <h6>Autre : </h6>
            <h3><?php echo $Autre ?></h3><br>

            <h5>MENTAL :</h5>
            <h6>Caractère : </h6>
            <h3><?php echo $Caractère ?></h3>
            <h6>Goût : </h6>
            <h3><?php echo $Goût ?></h3><br>

            <h5>FAMILLE :</h5>
            <h6>Mère : </h6>
            <h3><?php echo $Mere ?></h3>
            <h6>Père : </h6>
            <h3><?php echo $Pere ?></h3>
            <h6>Compagnon : </h6>
            <h3><?php echo $Compagnon ?></h3>
            <h6>Fratrie : </h6>
            <h3><?php echo $Fraterie ?></h3>
            <h6>Mentor : </h6>
            <h3><?php echo $Mentor ?></h3>
            <h6>Apprenti : </h6>
            <h3><?php echo $Apprenti ?></h3>
            <h6>Autre : </h6>
            <h3><?php echo $Autre ?></h3><br>

            <h5>Histoire et Illustration :</h5>

            <h6>Histoire : </h6>
            <h3><?php echo $Histoire ?></h3>
            <h6>Image : </h6>
            <h3><img src="<?php echo $Image ?>" /></h3><br>





            <h1><br><br></h1>
        </div>




        <footer>
            <h2 id="contact">Nos réseaux !!!</h2>

            <div id="deuxiemeTrait"></div>
            <div id="copyrightEtIcons">
                <div id="copyright">
                    <span>© LGDC RP; 2022</span>
                </div>
                <div id="icons">
                    <a href="https://www.youtube.com/channel/UCqxsU0yqLZR0VPCdGNoiWRg"><i class="fa fa-youtube"></i></a>
                    <a href="https://discord.gg/vt5abvRWJK"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z" />
                        </svg></a>

                </div>
            </div>

        </footer>