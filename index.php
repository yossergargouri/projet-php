<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>isi kef</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">


    <style>
      form {
  max-width: 600px; /* Largeur maximale du formulaire */
  margin: 0 auto; /* Centrer le formulaire horizontalement */
  padding: 20px; /* Espace intérieur du formulaire */
  border: 1px solid #ccc; /* Bordure autour du formulaire */
  border-radius: 5px; /* Coins arrondis de la bordure */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Ombre autour du formulaire */
}

label {
  display: block; /* Afficher chaque label sur une ligne séparée */
  font-weight: bold; /* Gras pour les libellés */
  margin-bottom: 5px; /* Espace sous chaque label */
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%; /* Largeur pleine du champ de saisie */
  padding: 10px; /* Espace intérieur du champ de saisie */
  margin-bottom: 20px; /* Espace sous chaque champ de saisie */
  border: 1px solid #ccc; /* Bordure autour du champ de saisie */
  border-radius: 5px; /* Coins arrondis de la bordure */
  box-sizing: border-box; /* Inclure la bordure et le rembourrage dans la largeur */
}

input[type="submit"] {
  background-color:#dda324; /* Couleur de fond du bouton Envoyer */
  color: white; /* Couleur du texte du bouton Envoyer */
  padding: 10px 20px; /* Espace intérieur du bouton Envoyer */
  border: none; /* Supprimer la bordure du bouton Envoyer */
  border-radius: 5px; /* Coins arrondis de la bordure du bouton Envoyer */
  cursor: pointer; /* Curseur pointer lorsque le bouton Envoyer est survolé */
}

  </style>

  </head>

<body>

   
  <!-- authentification-->
  <header class="main-header clearfix" role="header">
  <?php  
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "ma base";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM user WHERE mail = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"]; 
                     $_SESSION['password'] = $_POST["password"] ;  
                     header("location:.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
 <!--header-->
 
    <div class="logo">
      <a href="#"><em>isi kef</em> </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">accueil</a></li>
        <li><a href="#section3">Inscription</a></li>
        <li><a href="#section5">Login</a></li>
        <li><a href="#section2">A propos</a></li>
        <li><a href="#section4">no club</a></li>
        <li><a href="#section6">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="section main-banner" id="top" data-section="section1">
          <img src="assets/images/isik.jpg" />
      <div class="video-overlay header-text">
          <div class="caption">
              <h2><em>institut</em> supérieur d'informatique</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="http://www.isikef.rnu.tn/Fr/accueil_46_4"  rel="sponsored" class="external">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>
<!-- a propos-->
  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Nos licence</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>licence Génie logiciel et systèmes d'information</a></li>
              <li><a href='#tabs-2'>licence informatique et multimédia</a></li>
              <li><a href='#tabs-3'>Licence en Computer Engineering</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/master.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Cette licence permet de:</h4>
                    <p>Concevoir et développer des applications informatiques.
                      Gérer des projets informatiques.
                      Evaluer et assurer la maintenance des systèmes informatiques
                      Gérer et Analyser des données 
                      <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=VU1ZFAwjUTBXZlIoAT1RYgguDTI=&etab=BGEEOVxo">View Detail</a>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/glsi.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Cette licence permet de:</h4>
                    <p>Concevoir et développer des applications informatiques dans le domaine du multimédia
                      Développer les techniques de manipulation des données multimédia.</p> 
                    <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=VU1ZFAwjUTBXZlIoAT1RYgguDTI=&etab=BGEEOVxo">View Detail</a>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/licence.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Cette licence permet de:</h4>
                    <p>develop and apply computer-aided modeling and simulation techniques in advanced manufacturing processes
                      design and control increasingly digitally networked production systems
                      deploy methods of data analysis for life cycle predictions and assessments of materials
                      cultivate system-analytical thinking in quality management tasks ;</p>
                    <a href="http://parcours-lmd.salima.tn/listeueetab.php?parc=VU1ZFAwjUTBXZlIoAT1RYgguDTI=&etab=BGEEOVxo">View Detail</a>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--inscription-->
  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>
                Bienvenue l'institut superieur d'informatique, où nous offrons une éducation de qualité supérieure .
                <br>
                sign <em>up</em> here <br>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>s'inscrire </h6>
            </div>
            <form id="contact" action="ajouter_etudiant" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="nom" type="text"   placeholder="nom" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="prenom" type="text"  placeholder="prenom" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text"   placeholder="contact@isikefU-jendouba.tn" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="mdp" type="password"   placeholder="password" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">submit</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- nos club-->

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Nos club</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/enactus.png" >
            <div class="down-content">
              <h4>enactus</h4>
              <p>Enactus Tunisie est une organisation d’entrepreneuriat socsial qui mobilise des business leaders, des étudiants et des enseignants universitaires .</p>
                <img src="assets/images/gaith.png" >
            </div>
          </div>
          <div class="item">
            <img src="assets/images/google.png">
            <div class="down-content">
              <h4>google developers</h4>
              <p>Explore more than 1,900 college and university chapters across more than 100 countries.</p>
                <img src="assets/images/ranim.png" >
            </div>
          </div>
            <div class="item">
              <img src="assets/images/microsoft.jpg" >
              <div class="down-content">
                <h4>microsoft</h4>
                <p>notre Programme Customer Success pour vous accompagner sur l'adoption et le change, mais aussi sur les usages de M365, Azure et D365 !.</p>
                  <img src="assets/images/jalel.png" >
              </div>
            </div>
            <div class="item">
              <img src="assets/images/tnivision.png" >
              <div class="down-content">
                <h4>tunivision</h4>
                <p>Tunivisions foundation est offert par media visions editing. Une communauté de 130 universités à travers le pays qui offre des expériences ou les jeunes apprennent par la pratique</p>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/ant.jpg" >
              <div class="down-content">
                <h4>ANT</h4>
                <p>As we move forward, we are excited to continue our collaborate toward achieving greater heights of success</p>
                <img src="assets/images/aymen.png" >
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--calendrier-->

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
          <?php

$bgcolor="#ffffff"; //Couleur de fond du calendrier peut aussi contenir none pour un fond transparent
$text="#000000"; //Couleur du texte. Peur ne rien contenir pour la couleure par d�faut
$thedaybgcolor="#ff0000"; //Couleur de fond du jour.
$thedaytext="#ffffff"; //Couleur du texte du jour.

$textfamily="Verdana,Arial"; //Police
$textsize="30px"; //Taille du texte
$language="francais"; //Fichier de langue ex : francais va charger francais_datedata.php

$numberofday=date("t");
$now=date("j");
$timespamp=date("U");
$nplus=$now*24*3600;

$firstday=time()-$nplus+24*3600;
$firsttest=date("j",$firstday);
if(file_exists($language."_datedata.php"))
{
  include_once($language."_datedata.php");
}
else
{
$semaine=array(
	" dimanche", " lundi", " mardi", " mecredi", " jeudi", " vendredi"," samedi"
);
$mois=array(
	1=>" janvier "," fevrier "," mars "," avril "," mai "," juin "," juillet "," aout "," septembre "," octobre "," novembre "," decembre "
);
$abbrev=array(
	" Lun ",
	" Mar ",
	" Mer ",
	" Jeu ",
	" Ven ",
	" Sam ",
	" Dim "
);
$le="le";
}
?>
<?php 
?>
<?php echo "<b>".strtoupper($semaine[date("w")]).", $le ".date("j").$mois[date("n")].date("Y")."</b>"; ?>
<br />
<table style="font:
<?php echo ($textsize=="") ? "":$textsize;?> 
<?php echo $textfamily; ?>
;text-align:center;<?php
echo ($bgcolor=="")?"":"background:$bgcolor;";
if($text=="") { echo "oui"; }
echo ($text=="")?"":"color:$text;";?>">
<?php
echo "  <tr>
    <td>{$abbrev[0]}</td>
    <td>{$abbrev[1]}</td>
    <td>{$abbrev[2]}</td>
    <td>{$abbrev[3]}</td>
    <td>{$abbrev[4]}</td>
    <td>{$abbrev[5]}</td>
    <td>{$abbrev[6]}</td>
  </tr>
  <tr>\n"; ?>
<?php
$i=0;
while($i<date("w",$firstday)-1)
{
  echo "    <td>&nbsp;</td>\n";
  $i++;
}
$v=$i;
$i=1;
$iv=1;
while($i<=$numberofday)
{
  if(date("w",$firstday+$i*24*3600-24*3600*2) == "0") { echo "  </tr>\n  <tr>\n"; }
  if($iv==date("j",time()))
  {
    echo "    <td style=\"background:$thedaybgcolor;color:$thedaytext;\">$i</td>\n";
  }
  else
  {
  echo "    <td>$i</td>\n";
  }
  if($i==$numberofday)
  {
    if(date("w",time()+(($numberofday-date("w",time()))*24*3600))=="0")
    {
    }
    else
    {
      $encore=7-date("w",time()+(($numberofday-date("j",time()))*24*3600));
      $for=0;
      while($for<$encore)
      {
        echo "    <td>&nbsp;</td>\n";
        $for++;
      }
    }
  }
  $i++;
  $iv++;

}
?>
  </tr>
</table>
<?php 
?>
          </div>
        </div>

        <!-- login-->
        <div class="col-md-6 align-self-center">
          <div class="left-content">
          <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?> 
          <form name="connexion" action="session.php" method="post" onsubmit="return test()" >
          <fieldset>
            <legend><center>Login : </center></legend>
        <label > Mail </label>
       <input type="email" name="mail" placeholder="SVP entrez votre Mail !!"/>
           <br>
           <br>
         <label > Password </label>
         <input type="password" name="password" placeholder="SVP entrez votre mot de passe ! !"/>
         <br>
         <br>
          <input type="submit" value="Login">
         <input type="reset" value="Reset">
            </fieldset>
             </form>
             <script>
              //verification
        function test() {
            var login = connexion.username.value;
            var pwd = connexion.password.value;
            var a = "@";
            

            if (login.length === 0 || pwd.length === 0) {
                alert("Vérifier votre login et votre de mot de passe");
                return false;
            }
            else {
                if (pwd.length < 8 || pwd.length > 8) {
                    alert("Votre mot de passe doit avoir une longueur égale à 8 caractères");
                    return false;
                }

                if (login.substring(login.indexOf(a)) != '@isikefU-jendouba.tn') {
                    alert("Votre de mot de passe doit avoir une adresse gmail");
                    return false;
                } 
            }
        }
    </script>
          </div>
        </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>autre information</h2>
          </div>
        </div>
        <div class="col-md-6">
                    <!--commentaire-->
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message </button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <!--maps-->
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.5386977298745!2d8.708124418165447!3d36.177778576833575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fba44eb16009e5%3A0xea46e94b9ed2cde8!2sInstitut%20Sup%C3%A9rieur%20de%20l&#39;Informatique%20du%20Kef!5e0!3m2!1sfr!2stn!4v1680709571685!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <!--contact-->
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> isi kef  &copy; 2023 
            Institut Supérieur d'Informatique du Kef
            5 Rue Saleh Ayech - 7100 Kef Tél.: (216) 78 201 056 - Fax : (216) 78 200 237</p></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>