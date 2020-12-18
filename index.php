<!DOCTYPE html>
<html lang="fr">
<head>
   <!--    DEBUT DU HEAD -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php

    /**
    * General Path
    */


    define("DS", DIRECTORY_SEPARATOR);
    define("DIRECTORY_PAGES","application" . DS . "templates" .DS. "pages" . DS);
    define("DIRECTORY_PARTS","application" . DS . "templates" .DS. "parts" . DS);
    define("DIRECTORY_CORE","application" . DS . "core" . DS);
    define("URL", "http://localhost/vitrinewebsite/");

    /**
    * Import
    */
    require_once(DIRECTORY_CORE . "utils.php");
    require_once(DIRECTORY_CORE . "bdd.php");



    /**
    * Connexion base de donnĂ©es
    */




    try{
      $basededonnees = new PDO("mysql:host=localhost;dbname=m2l", "root", "");
    }catch(PDOException $e){
      echo 'Connexion impossible à la base de données';
    }






    /**
    * Router
    */

    $page = strtolower($_GET['page'] ?? 'index');
    if(!file_exists(DIRECTORY_PAGES . $page . '.php'))
    {
       $page = "404";
    }

    require_once(DIRECTORY_PAGES . "{$page}.php");

    ?>


  <!--  *********************************************

          Modifier le nom du site du site ci-dessous

  *************************************************** -->
    <title>Site Vitrine - Projet M2L</title>

<!-- Lien vers le fichier de style "design.css" -->
     <link href="css/design.css" rel="stylesheet">

     <!-- Lien vers le fichier d'icones" -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    <!-- Lien vers le Framework Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


 <!--  CI-DESSOUS CODE POUR LA COMPATIBILITE INTERNET EXPLORER -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--    END / HEAD -->

</head>
<body>


            <!-- SECTION ACCUEIL  -->

         <section id="mainsection">
                    <div class="container">


                            <div class="col-lg-12">
                                <div class="intro-message">
                                    <h1>BIENVENUE SUR LE SITE DE LA MAISON DES LIGUE DE LORRAINE</h1>
                                                        <h3>La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales de Lorraine et à d’autres structures hébergées. La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL). Installée depuis 2003 dans la banlieue Nancéienne, la M2L accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.</h3>
                                    <hr class="intro-divider">
                                    <h2>Suivez nous</h2>

                                    <!--  CI-DESSOUS POUR CHANGER LES LIENS VERS VOS RESEAUX SOCIAUX  :  href="ici votre lien " -->

                                    <ul class="list-inline social-icon">

                                        <li>
                                            <a href="https://twitter.com/m2lme"  target="_blank">
                                            <span class="fa-stack">
                                              <i class="fa fa-square-o fa-stack-2x"></i>
                                              <i class="fa fa-twitter fa-stack-1x"></i>
                                            </span>
                                            </a>
                                        </li>
                                    </ul>
                                      <hr class="intro-divider">


                                      <!--        LIEN VERS FENETRE AVEC VIDEO YOUTUBE (OPTION)-->

                                       <!-- Large modal -->
                    <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#youtube-modal"> <strong>Un peu de publicité</strong></button>

                               <!--    //END / LIEN VERS FENETRE AVEC VIDEO YOUTUBE (OPTION)-->
                                </div>
                            </div>

                    </div>
        </section>


     <!-- // END /SECTION ACCUEIL  -->

    <!-- SECTION SERVICES  -->
    <section id="section1">
        <div class="container">

                        <div class="col-lg-12">
                            <h1 class="text-center">Nos services</h1>

                        </div>


                                       <div class="col-lg-6 col-xs-12">
                                                       <div class="row services-block">
                                                          <div class="col-lg-3 col-sm-3 hidden-xs icon-services">


<!--                                                               CI-DESSOUS POUR MODIFIER LES ICONES  : "fa fa-link fa-5x" , MODIFIER "link" par l'icone voulu -> voir sur https://fortawesome.github.io/Font-Awesome/icons/.
                                                               Par exemple pour mettre icone "bluetooth-b"  -> "fa fa-bluetooth-b fa-5x"-->


                                                                <i class="fa fa-link fa-5x"></i>
                                                           </div>
                                                           <div class="col-lg-9 col-sm-9 col-xs-12">
                                                              <h3>INSCRIPTION / CONNEXION</h3>
                                                               <p>Inscrivez-vous pour pouvoir bénéficier de nos services ! Déjà fait ? Alors conenctez-vous !</p>
                                                               <button><a href="register.php">Allez-y !</a></button>
                                                           </div>
                                                       </div>
                                        </div>

                                                  <div class="col-lg-6 col-xs-12">
                                                       <div class="row services-block">
                                                          <div class="col-lg-3 col-sm-3 hidden-xs icon-services">
                                                                <i class="fa fa-space-shuttle fa-5x"></i>
                                                           </div>
                                                           <div class="col-lg-9 col-xs-12">
                                                              <h3>JURIDICTION</h3>
                                                               <p>Découvrez le statut juridique de la M2L !</p>
                                                               <button><a href="juridiction.php">Par ici !</a></button>
                                        </div>

                                                           </div>
                                                       </div>
                                                    </div>



                                                      <div class="col-lg-6 col-xs-12">
                                                       <div class="row services-block">
                                                          <div class="col-lg-3 col-sm-3 hidden-xs icon-services">
                                                                <i class="fa fa-pie-chart fa-5x"></i>
                                                           </div>
                                                           <div class="col-lg-9 col-xs-12">
                                                              <h3>RÉSERVATION DES SALLES</h3>
                                                               <p>Découvrez une fonctionalité pouvant résoudre tous vos soucis de recherche de salles ! (appli bientôt en marche)</p>
                                                               <button><a href="reservation.php">Juste là !</a></button>
                                                           </div>
                                                       </div>
                                                        </div>


                                                         <div class="col-lg-6 col-xs-12">
                                                       <div class="row services-block">
                                                          <div class="col-lg-3 col-sm-3 hidden-xs icon-services">
                                                                <i class="fa fa-area-chart fa-5x"></i>
                                                           </div>
                                                           <div class="col-lg-9 col-xs-12">
                                                              <h3>PERSONNEL</h3>
                                                               <p>Renseignez-vous sur le personnel qui rend votre expérience au sein de la M2L la mieux possible !</p>
                                                               <button><a href="personnel.php">Yep, c'est là !</a></button>
                                                           </div>
                                                       </div>
                                                     </div>


                                                      <div class="col-lg-6 col-xs-12">
                                                       <div class="row services-block">
                                                          <div class="col-lg-3 col-sm-3 hidden-xs icon-services">
                                                                <i class="fa fa-user-secret fa-5x"></i>
                                                           </div>
                                                           <div class="col-lg-9 col-xs-12">
                                                              <h3>DESCRIPTIONS</h3>
                                                               <p>Voici pour vous diverses descriptions pour mieux vous repérer !</p>
                                                               <button><a href="locaux.php">Locaux</a></button>
                                                           </div>
                                                       </div>
                                                     </div>


                                               <div class="col-lg-6 col-xs-12">
                                                       <div class="row services-block">
                                                          <div class="col-lg-3 col-sm-3 hidden-xs icon-services">
                                                                <i class="fa fa-laptop fa-5x"></i>
                                                           </div>
                                                           <div class="col-lg-9 col-xs-12">
                                                              <h3>ADIPISCI</h3>
                                                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit molestiae atque error recusandae ipsam repudiandae id voluptas dolores reiciendis corporis consectetur mollitia veritatis sit, quam, ad ullam nihil, ut adipisci?</p>
                                                           </div>
                                                       </div>
                                                     </div>



        </div>
    </section>
<!-- // END / SECTION SERVICES -->



          <!-- SECTION CONTACT -->
    <div id="contact" class="contact-info">

                        <div class="container">

                                <div class="footer-col col-md-6 text-center">
                                    <h1>Nous rendre visite</h1>
                                              <address>
                                                  <strong>MAISON DES LIGUES DE LORRAINE</strong><br>
                                                  13 rue Jean Moulin - BP 70001<br>
                                                  54510 TOMBLAINE<br>
                                                  Tél. : 03.83.18.87.02<br>
                                                  Fax : 03.83.18.87.03
                                                </address>

                                                <address>
                                                  <strong>Adresse mail</strong><br>
                                                  <a href="mailto:#">contact@m2l.fr</a>
                                            </address>
                                </div>







                    </div>


    </div>
<!-- // END / SECTION CONTACT-->


<!--   BAS DE PAGE -->

       <!-- Footer -->
    <footer class="navbar navbar-default navbar-static-bottom text-center" id="footer">



                                <div class="col-lg-12">

                                      <!--       CI-DESSOUS POUR CHANGER LE COPYRIGHT-->

                                              <p> <strong>&copy; Frugal Solution - 2015 </strong> </p>
                                </div>




    </footer>
     <!-- Fin du Footer -->
<!--   // END / BAS DE PAGE   -->


  <!--          FENETRE AVEC VIDEO YOUTUBE (OPTION)-->

    <div class="modal fade" id="youtube-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><strong>Publicité</strong></h4>
      </div>
      <div class="modal-body">
                                                                <div class="media-body">
                                                  <div class="thumbnail embed-responsive embed-responsive-16by9">

                                                   <!--  METTRE VOTRE VIDEO YOUTUBE EN REMPLACANT "A7E0raKTsZA" PAR VOTRE DE VIDEO -->

                                                  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/KY612UZ4u48?feature=oembed"></iframe>
                                                </div>
                                                  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade youtube-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    </div>
  </div>
</div>

     <!--     END /  FENETRE AVEC VIDEO YOUTUBE (OPTION)-->


<!--     GOOGLE ANALYTICS-->

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  /*   VOTRE ID ANALYTICS A LA PLACE DE UA-XXXXXXX-X*/

  ga('create', 'UA-XXXXXXX-X', 'auto');
  ga('send', 'pageview');

</script>
  <!--    END / GOOGLE ANALYTICS-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript pour le smooth scroll -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
       <!-- Fichier JavaScript pour le paramètrage du smooth scroll -->
    <script src="js/scroll.js"></script>
</body>
</html>
