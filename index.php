<?php
include('header.php');
?>
<header>
  <div class="container">
    <h1 class="text-center">Julie BOULENGER <br> Développeuse web</h1>
  </div>
</header>
<main class="container">
  <div class="row m-0">
    <div class="content p-0">
      <div class="container">
        <div class="col-lg-10 col-sm-8 mx-auto">
          <div class="d-flex">
            <img class="m-auto logoJB" src="ressources/logo2JB.png" alt="Logo représentant un J et un B ensemble">
          </div>
          <h1 class="text-center">PORTFOLIO</h1>
          <h2>Venez découvrir mon univers !</h2>
            <div class="d-flex justify-content-center" >
              <img class="avatar" src="ressources/Avatar3.png" alt="Avatar Julie Boulenger moitié dessin moitié photo">
            </div>
          <h3 id="about">A propos</h3>
            <p> <span class="quote">« Tout le monde est un génie. Mais si vous jugez un poisson   sur ses capacités à grimper à un arbre, il passera sa vie à croire qu’il est stupide. »</span> Albert Einstein<br><br>

            Si je suis loin d'être la plus douée pour grimper à un arbre, je peux être fière de ma capacité d'analyse, d'écoute et de logique, atouts que je mets à profit dans ma carrière professionnelle.<br>

            Ma reconversion dans le développement informatique est une réussite : j'y ai trouvé ma voie, ma volonté de faire mon chemin et mon goût de bien y travailler. Apprendre est un bonheur, et progresser me motive. Je le fais avec énergie et le sourire.<br></p>
          <h3 id="competences">Compétences</h3>
            <p class="textcomp">Cliquez sur une compétence</p>
          <div class="logoCompetences">
            <img id="logohtml" src="ressources/logoHTML5.png" alt="logo HTML5">
            <img id="logocss" src="ressources/logoCSS3.png" alt="logo CSS3">
            <img id="logobootstrap" src="ressources/logobootstrap.png" alt="logo bootstrap">
            <img id="logophp" src="ressources/logoPhp.png" alt="logo Php">
            <img id="logowp" src="ressources/logoWordpress.png" alt="logo Wordpress">
            <img id="logojs" src="ressources/js-logo.png" alt="logo Js">
          </div>
                <br>
            <div class="btncompetence">
              <button id="btncompetence" type="button" name="button">Masquer</button>
            </div>
            <div class="competencehtml" id="competencehtml">
              <h3>Mes compétences en HTML5</h3>
                <p>Après plusieurs intégrations à partir de maquette, j'ai pu perfectionner mes connaissances en HTML, langage de base pour le développement informatique.</p>

            </div>
            <div class="competencecss" id="competencecss">
              <h3>Mes compétences en CSS</h3>
                <p>Adepte de SASS, j'ai appris à gérer le CSS de manière plus automatique et avec des variables pour la maintenabilité du site. Flexbox et Zindex me résistent encore, mais plus pour longtemps !</p>
            </div>
            <div class="competencebootstrap" id="competencebootstrap">
              <h3>Mes compétences en Bootstrap</h3>
                <p>Facilitateur de construction de page, Bootstrap est très utile avec sa grille sur 12 et toutes ses fonctionnalités. Parfois, il est plus rapide sur certains sites vitrines d'utiliser du full Bootstrap plutôt que de passer trop de temps en CSS !</p>
            </div>
            <div class="competencephp" id="competencephp">
              <h3>Mes compétences en PHP</h3>
                <p>Premier langage de programmation que j'ai appris, c'est à travers le projet d'explorateur de fichiers que j'ai découvert le PHP. A l'aise pour continuer de me perfectionner, c'est sur ce langage que je me suis initiée à la POO.</p>
            </div>
            <div class="competencewp" id="competencewp">
              <h3>Mes compétences en WordPress</h3>
                <p>Forte de deux projets WordPress, un thème pour apprendre et un projet réel de groupe, j'ai appris à me débrouiller avec WordPress et suis ouverte à en apprendre d'avantage sur ce CMS si populaire sur le Web.</p>
            </div>
            <div class="competencejs" id="competencejs">
              <h3>Mes compétences en JavaScript</h3>
                <p>Langage coup de coeur, j'aime tous les possibles que Javascript offre ! Autant en front qu'en back avec NodeJs, j'aimerais à terme me perfectionner et j'hésite encore entre Js et Python sur ma spécialité.</p>
            </div>

          <h3 id="projects">Projets</h3>
            <div class="row projetcentrer">
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 27rem;">
                <div class="card-header d-flex justify-content-center">
                  <img class="iconeComp" src="ressources/logoPhpnb.png" onmouseover="this.src='ressources/logoPhp.png'" onmouseout="this.src='ressources/logoPhpnb.png'" alt="logo PHP">
                </div>
                <img src="ressources/explofichiers.PNG" class="card-img-top" alt="Exporateur de fichier en PHP">
                <div class="card-body">
                  <h5 class="card-title">Projet Explorateur de Fichiers</h5>
                  <p class="card-text">Développement d'un explorateur de fichiers style windows à l'aide de PHP.</p>
                  <div class="d-flex">
                    <a href="https://github.com/JBoulenger21/file_explorer" target="_blank" class="btn btn-primary btncardprojet m-1">Repository GitHub</a>
                    <a href="projet.php#explofichiers" class="btn btn-primary btncardprojet m-1">En voir plus</a>
                  </div>
                </div>
              </div>
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 27rem;">
                <div class="card-header d-flex justify-content-center">
                  <img class="iconeComp" src="ressources/js-logonb.png" onmouseover="this.src='ressources/js-logo.png'" onmouseout="this.src='ressources/js-logonb.png'" alt="logo PHP">
                </div>
                <img src="ressources/flappybird.PNG" class="card-img-top" alt="logo ACSCAPE">
                <div class="card-body">
                  <h5 class="card-title">Flappy Bird</h5>
                  <p class="card-text">Developpement d'un Flappy Bird en full Js.</p>
                  <div class="d-flex">
                    <a href="https://github.com/JBoulenger21/FlappyBird" target="_blank" class="btn btn-primary btncardprojet">Repository GitHub</a>
                    <a href="projet.php#flappybird" class="btn btn-primary btncardprojet m-1">En voir plus</a>
                  </div>
                </div>
              </div>
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 27rem;">
                <div class="card-header d-flex justify-content-center">
                  <img class="iconeComp" src="ressources/logoHTML5nb.png" onmouseover="this.src='ressources/logoHTML5.png'" onmouseout="this.src='ressources/logoHTML5nb.png'" alt="logo HTML5">
                  <img class="iconeComp" src="ressources/logoCSS3nb.png" onmouseover="this.src='ressources/logoCSS3.png'" onmouseout="this.src='ressources/logoCSS3nb.png'" alt="logo CSS3">
                  <img class="iconeComp" src="ressources/logoWordpressnb.png" onmouseover="this.src='ressources/logoWordpress.png'" onmouseout="this.src='ressources/logoWordpressnb.png'" alt="logo WordPress">
                  <img class="iconeComp" src="ressources/logoWordpressnb.png" onmouseover="this.src='ressources/logoWordpress.png'" onmouseout="this.src='ressources/logoWordpressnb.png'" alt="logo WordPress">
                </div>
                <img src="ressources/laumaju.png" class="card-img-top" alt="Aperçu projet WordPress">
                <div class="card-body">
                  <h5 class="card-title">Projet WordPress</h5>
                  <p class="card-text">Développement d'un site WordPress sur les inégalités des genres.</p>
                  <div class="d-flex">
                    <a href="https://github.com/JBoulenger21/file_explorer" target="_blank" class="btn btn-primary btncardprojet m-1">Repository GitHub</a>
                    <a href="projet.php#laumaju" class="btn btn-primary btncardprojet m-1">En voir plus</a>
                  </div>
                </div>
              </div>
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 27rem;">
                <div class="card-header d-flex justify-content-center">
                  Projet ACSCAPE
                </div>
                <img src="ressources/logo-bleu.png" class="card-img-top" alt="logo ACSCAPE">
                <div class="card-body">
                  <h5 class="card-title">Projet ACSCAPE</h5>
                  <p class="card-text">Début du développement d'un EscapeGame Managment System (EGMS) en mode projet.</p>
                  <div class="d-flex">
                    <a href="https://github.com/ACSCAPE" target="_blank" class="btn btn-primary btncardprojet">Organisation GitHub</a>
                    <a href="projet.php#acscape" class="btn btn-primary btncardprojet m-1">En voir plus</a>
                  </div>
                </div>
              </div>
              <a href="projet.php"><button type="button" name="button" class="btnprojet">Tous les projets en détail</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3 contactform">
    <h2 id="contact">Contact</h2>

    <form action="index.php" method="post">
      <div class="mb-3">
        <label class="form-label">Nom Prénom</label>
        <input type="text" class="form-control" name="nomContact" id="nomContact" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Adresse Email</label>
        <input type="email" class="form-control" name="emailContact" id="emailContact" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Sujet</label>
        <input type="text" class="form-control" name="sujetContact" id="sujetContact" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Votre message</label>
        <textarea class="form-control" name="textContact" id="textContact" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btnContact">Me contacter</button>
    </form>
  </div>
</main>
<div class="d-flex contact">
<?php
if(isset($_POST['nomContact']) && isset($_POST['emailContact']) && isset($_POST['sujetContact']) && isset($_POST['textContact'])){
  if (!empty($_POST['nomContact']) && !empty($_POST['emailContact']) && !empty($_POST['sujetContact']) && !empty($_POST['textContact'])){
    $nom = $_POST['nomContact'];
    $nom = check($nom);
    $mail = $_POST['emailContact'];
    $msg = $_POST['textContact'];
    $subject = $_POST['sujetContact'];
    $dest = "boulenger.julie@gmail.com";
    $sujet = check($subject);
    $corp = check($msg);

    $mailheaders = "From: $mail\n";
    $mailheaders .= "MIME-version: 1.0\n";
    $mailheaders .= "Content-type: text/html; charset= utf-8\n";

       if (mail($dest, $sujet, 'Nom : '.$nom.'<br>'.$corp, $mailheaders))  {
        echo "<p>Email envoyé avec succès</p>";
        } else {
        echo "<p>Échec de l'envoi de l'email...</p>";
        }
        }else{
          echo "<p>Veuillez renseigner tous les champs.</p>";
        }
}

function check($input){
  trim($input);
  stripslashes($input);
  htmlspecialchars($input);
  return $input;
}
 ?>
  </div>


<?php
include('footer.php');
?>
