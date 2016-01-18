<?php
include("connexion_base.php");
session_start();
if (isset($_SESSION['login']))
{
    echo 'Bonjour ' . $_SESSION['login'];
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mairie de villiers | Pour une ville souriante et conviviale !</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/tuto.css" rel="stylesheet">
  </head>

<body>
<header id="top">
  <a href="../index.html"><img class="img-responsive" id="banniere" src="../Images/banniere2.png"></img></a>
</header>
<div class="container-fluid">
  <div class="row">
    <nav class="navbar navbar-default" id="couleurnav">
      <div class="container-fluid">
    <!-- Ici se trouve le "Hamburger button" -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--Ici il s'agit du bouton permettant de faire défiler le menu lorsqu'il est réglé pour les mobiles-->
        </div>
    <h1>Voici la liste des utilisateurs:</h1>
    <table>
    <tr>
        <th>Id</th>
        <th>Nom d'utilisateur</th>
        <th>Email</th>
    </tr>
    <?php
    //On recupere les identifiants, les pseudos et les emails des utilisateurs
    $IDClient = $_POST['IDClient'];
    $login = $_POST['login'];
    $email = $_POST['email'];

    $req = $bdd->prepare('SELECT IDClient, login, email FROM personne');
    $req->execute(array(
      'IDClient' => $IDClient,
      'login' => $login,
      'email' => $email));

    $res = $req->fetch();
    ?>
        <tr>
        <td class="left"><?php echo $dnn['IDClient']; ?></td>
        <td class="left"><a href="Profil_Utilisateur.php?id=<?php echo $dnn['IDClient']; ?>"><?php echo htmlentities($dnn['login'], ENT_QUOTES, 'UTF-8'); ?></a></td>
        <td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>

   <div class="row">
      <footer class="col-lg-12">
        <div class="row">
          <p class="col-lg-8">
           Ce site a été créé par Chung Steven et Quentin Vilcoque, Man Sophervuth, Malekama Dominique.
          </p>
          <a href="#top"><p class="col-lg-offset-2 col-lg-2">
            Haut de page 
          </p>
        </a>
        </div>



      </footer>
    </div>
  </div>

    <script src="../js/jquery-1.11.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Ici se trouve des fichiers Javascript nécessaires (notamment la librairie jQuery) -->
    <? php
    header('refresh:3;../Profil_Utilisateur.php');
    exit();
    ?>

  </body>
    
</html>
