<?php
session_start();
if (isset($_SESSION['login']))
{
    echo 'Bonjour ' . $_SESSION['login'];
    echo '<a href="html/deco.php">Deconnexion</a>';
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
  <a href="../index.php"><img class="img-responsive" id="banniere" src="../Images/banniere2.png"></img></a>
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

           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="couleur">
              <li class="active"><a href="../index.php">Accueil<span class="sr-only">(current)</span></a></li>
              <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
              <li><a href="../html/InscripEnfant.php">Inscription d'un enfant</a></li>
              <li><a href="../html/InscripActivites.php">Inscription aux activités</a></li>
              <li><a href="../html/Activites.php">Activités</a></li>

            </ul>
          </div>  
        
          <?php
       include('connexion_base.php');
       $IDClient=$_GET['IDClient']; 
	   $sql="select * from personne where IDClient='$IDClient'";
	   $result=mysql_query($sql);

	   $ligne=mysql_fetch_array($result);
                
       $login=$ligne['login'];
       $password=$ligne['password'];       
	   $nom=$ligne['nom'];
	   $prenom=$ligne['prenom'];
       $sexe=$ligne['sexe'];
	   $adresse=$ligne['adresse'];
	   $cp=$ligne['cp'];
	   $ville=$ligne['ville'];
	   $email=$ligne['email'];
       $tel=$ligne['telephone'];


    echo "$login $password $nom $prenom $sexe $adresse $cp $ville $email $tel ";
   
          ?>
    <!--<div class="container">
         <h1>Profil</h1>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="form-group">
                          <label for="nom">Pseudo</label>
                      <?php echo $total['login']; ?>
                        </div>
                        <div class="form-group">
                          <label for="nom">Mot de passe</label>
                          <?php echo $total['password']; ?>
                        </div>  
                        <div class="form-group">
                          <label for="nom">Nom</label>
                           <?php echo $total['nom']; ?>
                        </div>
                        <div class="form-group">
                          <label for="prenom">Prenom</label>
                           <?php echo $total['prenom']; ?>
                        </div>
                        <div class="form-group"> 
                          <label for="sexe">Sexe</label>
                          <?php echo $total['sexe']; ?>
                        </div>
                        <div class="form-group">
                        <label for="datanaiss">Date de naissance :</label>
                       <?php echo $total['datenaiss']; ?>
                        </div>
                        <div class="form-group">
                          <label for="adresse">Adresse</label>
                           <?php echo $total['adresse']; ?>
                        </div>
                        <div class="form-group">
                          <label for="cp">Code Postal</label>
                           <?php echo $total['cp']; ?>
                        </div>
                        <div class="form-group">
                          <label for="ville">Ville</label>
                          <?php echo $total['ville']; ?>
                        </div>
                        <div class="form-group">
                         <label for="email">Email</label>
                         <?php echo $total['email']; ?>
                        </div>
                        <div class="form-group">
                          <label for="tel">Telephone</label>
                          <?php echo $total['tel']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
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
