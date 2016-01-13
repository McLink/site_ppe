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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--Début de la barre de navigation -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="couleur">
        <li><a href="../index.php">Accueil</a></li>
        <!--Ici on indique que l'icome de la page courante est celle active(donc grisée)-->
        <li><a href="Services.php">Services</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li class="active"><a href="Contact.php">Contact<span class="sr-only">(current)</span></a></li>
        <li><a href="Mentions_legales.php">Mentions légales</a></li>
      </ul>
       <form class="navbar-form navbar-right" action="connexion.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="login" placeholder="Login">
          <input type="password" class="form-control" name="password" placeholder="Mot de passe">
        </div>
        <button class="btn btn-default" type="submit">Connexion</button>
        <a class="btn btn-default" role="button" href="Page_Inscription.php">Inscription</a>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="row">
  <div class="col-lg-offset-2 col-lg-2">
    <address>
      <strong>Contact</strong> <br>
      <br> 
      <p>
      <strong>Pour nous contacter :</strong>
      <br/>
     Place de l'Hôtel-de-Ville <br>
     94350 Villiers-sur-Marne <br>
     France <br>

      <br>
      Tel : 01 44 23 32 98
      <br>
      <strong>mail :</strong><br>
      <a href="mailto:mairievilliers@gmail.com">mairievilliers@gmail.com</a>
      <br>
      <br>
    </address>
  </div>
</div>
    <div class="col-lg-4 col-lg-offset-2 ">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.6879023722026!2d2.540685000000006!3d48.82601600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60dd923ea21e9%3A0xc083eaee84d3f86a!2sMairie!5e0!3m2!1sfr!2sfr!4v1427109478475" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
    </div>

<div class="row">
  <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
    <div class="table-responsive">
      <table class="table" id="tableau1">
        <caption>Horaires d'ouverture :</caption>
       <tr>
           <th>Lundi</th>
           <th>Mardi</th>
           <th>Mercredi</th>
           <th>Jeudi</th>
           <th>Vendredi</th>
           <th>Samedi</th>
       </tr>

       <tr>
           <td>8h/13h</td>
           <td>8h/13h</td>
           <td>8h/13h</td>
           <td>8h/13h</td>
           <td>8h/13h</td>
           <td>8h/13h</td>
       </tr>
       <tr>
           <td>15h/20h</td>
           <td>15h/20h</td>
           <td>15h/20h</td>
           <td>15h/20h</td>
           <td>15h/20h</td>
       </tr>
      </table>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
    <form method="post" action="">
      <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="Nom" placeholder="Entrez votre Nom">
      </div>
      <div class="form-group">
        <label for="Prenom">Prenom</label>
        <input type="text" class="form-control" id="Prenom" placeholder="Entrez votre Prenom">
      </div>
      <div class="form-group">
        <label for="Adresse">Adresse</label>
        <input type="text" class="form-control" id="Adresse" placeholder="Entrez votre Adresse">
      </div>
      <div class="form-group">
        <label for="CP">CP</label>
        <input type="numbers" class="form-control" id="CP" placeholder="Entrez votre CP">
      </div>
      <div class="form-group">
        <label for="Ville">Ville</label>
        <input type="text" class="form-control" id="Ville" placeholder="Entrez votre ville">
      </div>
      <div class="form-group">
        <label for="Telephone">Telephone</label>
        <input type="numbers" class="form-control" id="Telephone" placeholder="Entrez votre numéro de télephone">
      </div>
      <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" class="form-control" id="Email" placeholder="Entrez votre adresse email">
      </div>
      <div class="form-group">
        <label for="motif">Pourquoi nous contactez vous ?</label>
        <textarea type="text" class="form-control" id="motif" placeholder="Entrez votre texte ici" rows="4"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Envoyer</button>
      <button type="reset" class="btn btn-default">Annuler</button>
    </form>
  </div>
</div>
<br/>

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
        <script type="text/javascript">
      $('a[href^="#top"]').click(function(){
      var the_id = $(this).attr("href");

      $('html, body').animate({
        scrollTop:$(the_id).offset().top
      }, 'slow');
      return false;
      });
    </script>
  </body>
    
</html>