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
        <li><a href="../html/Services.php">Services</a></li>
        <li><a href="../html/FAQ.php">FAQ</a><li>
        <li><a href="../html/Contact.php">Contact</a><li>
        <li class="active"><a href="Mentions_legales.php">Mentions légales<span class="sr-only">(current)</span></a></li>
      </ul>
      <form class="navbar-form navbar-right" action="ConnexionAdmin.php" action="connexion.php" method="POST">
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
      </div>
        <div class="row">
        <section class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
          <h1>Mentions légales</h1>
          <div class="row">
            <p>
             L'information communiquée sur ce site est présentée à titre indicatif. Elle ne prétend aucunement à l'exhaustivité. Malgré les mises à jour du contenu du site, la ville de Villiers ne peut être tenue pour responsable de la modification des dispositions administratives et juridiques survenant après la publication.<br/>
             <br/>

            Les informations publiées dans le fichier des associations le sont sous leur responsabilité. Pour signaler une erreur ou demander la rectification d'informations, contactez le webmestre par téléphone ou par courriel.<br/>
            <br/>

            La ville de Villiers ne peut être tenue pour responsable des informations diffusées sur les sites en lien et de l'utilisation qui peut en être faite. La ville de Villiers dégage toute responsabilité concernant les liens créés par d'autres sites vers ses propres sites. L'existence de tels liens ne peut permettre d'induire que la ville de Villiers cautionne ces sites ou qu'elle en approuve le contenu.<br/> 
            <br/>

            <h2>Protection de la vie privée</h2> 
            <br/>

            Utilisation des cookies : Ce site n'en utilise pas. Aucune information nominative n'est enregistrée.<br/> 
            Messagerie : En utilisant votre logiciel de messagerie, vous nous communiquez votre adresse électronique. Elle ne sera pas utilisée à des fins commerciales.Vous pouvez demander à tout moment, par simple courrier électronique ou par lettre, de ne plus figurer dans nos fichiers de contacts. Conformément à la loi Informatique et libertés du 6 janvier 1978, vous disposez d'un droit d'accès, de modification, de rectification et de suppression des données vous concernant auprès de la ville de Villiers.<br/>
            <br/>

            <h2>Droits d'utilisation et de reproduction</h2>
            <br/>

            Le droit de reproduction et/ou droit de représentation des données du site web www.mairiedevilliers.fr est exclusivement destiné à l'usage privé et/ou aux seules fins de consultation personnelle et privée des utilisateurs du réseau Internet.<br/> 
            <br/>

            Toute autre utilisation est strictement interdite et susceptible de poursuites conformément aux dispositions du Code de la Propriété Intellectuelle français, des règlements nationaux et des conventions internationales en vigueur.<br/>
            <br/> 

            Le logo de la ville de Villiers est la propriété de la ville de Villiers.<br/>
            Toute reproduction totale ou partielle de cette marque sans autorisation préalable et écrite est interdite, de même que toute modification des proportions, couleurs, éléments et constituants.<br/> 
            <br/>

            <h2>Droit applicable</h2>
            <br/> 

            De convention expresse entre les parties, le droit applicable aux présentes et à leurs conséquences est exclusivement le Droit Français, tant en ce qui concerne les règles de procédure que celles du fond.<br/> 

            </p>
          </div>
        </section>
      </div>
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

    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
