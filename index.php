<?php
include('header.php');
?>
<header>
  <div class="container">
    <h1 class="text-center">Julie BOULENGER Developpeuse web</h1>
  </div>
</header>
<section class="container">
  <div class="row m-0">
    <div class="content p-0">
      <div class="container">
        <div class="col-lg-10 col-sm-8 mx-auto">
          <h1 class="text-center">PORTFOLIO</h1>
          <h2>Venez découvrir mon univers !</h2>
          <div class="d-flex justify-content-center" >
            <img src="ressources/Avatar3.png" alt="Avatar Julie Boulenger moitié dessin moitié photo">
          </div>
          <h3 id="about">A propos</h3>
            <p> <span class="quote">« Tout le monde est un génie. Mais si vous jugez un poisson   sur ses capacités à grimper à un arbre, il passera sa vie à croire qu’il est stupide. »</span> Albert Einstein<br><br>

            Si je suis loin d'être la plus douée pour grimper à un arbre, je peux être fière de ma capacité d'analyse, d'écoute et de logique, atouts que je mets à profit dans ma carrière professionnelle.<br>

            Ma reconversion dans le développement informatique est une réussite : j'y ai trouvé ma voie, ma volonté de faire mon chemin et mon goût de bien y travailler. Apprendre est un bonheur, et progresser me motive. Je le fais avec énergie et le sourire.<br></p>
          <h3 id="competences">Compétences</h3>
          <div class="logoCompetences">
            <img src="ressources/logoHTML5.png" alt="logo HTML5">
            <img src="ressources/logoCSS3.png" alt="logo CSS3">
            <img src="ressources/logobootstrap.png" alt="logo bootstrap">
            <img src="ressources/logoPhp.png" alt="logo Php">
            <img src="ressources/logoWordpress.png" alt="logo Wordpress">
            <img src="ressources/js-logo.png" alt="logo Js">
          </div>
          <h3 id="projects">Projets</h3>
            <div class="row projetcentrer">
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 25rem;">
                <div class="card-header d-flex justify-content-center">
                  <img class="iconeComp" src="ressources/logoPhpnb.png" onmouseover="this.src='ressources/logoPhp.png'" onmouseout="this.src='ressources/logoPhpnb.png'" alt="logo PHP">
                </div>
                <img src="ressources/explofichiers.PNG" class="card-img-top" alt="Exporateur de fichier en PHP">
                <div class="card-body">
                  <h5 class="card-title">Projet Explorateur de Fichiers</h5>
                  <p class="card-text">Développement d'un explorateur de fichiers style windows à l'aide de PHP.</p>
                  <a href="https://github.com/JBoulenger21/file_explorer" target="_blank" class="btn btn-primary btncardprojet">Repository GitHub</a>
                </div>
              </div>
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 25rem;">
                <div class="card-header d-flex justify-content-center">
                  <img class="iconeComp" src="ressources/logoPhpnb.png" onmouseover="this.src='ressources/logoPhp.png'" onmouseout="this.src='ressources/logoPhpnb.png'" alt="logo PHP">
                </div>
                <img src="ressources/explofichiers.PNG" class="card-img-top" alt="Exporateur de fichier en PHP">
                <div class="card-body">
                  <h5 class="card-title">Projet Explorateur de Fichiers</h5>
                  <p class="card-text">Développement d'un explorateur de fichiers style windows à l'aide de PHP.</p>
                  <a href="https://github.com/JBoulenger21/file_explorer" target="_blank" class="btn btn-primary btncardprojet">Repository GitHub</a>
                </div>
              </div>
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 25rem;">
                <div class="card-header d-flex justify-content-center">
                  Projet ACSCAPE
                </div>
                <img src="ressources/logo-bleu.png" class="card-img-top" alt="logo ACSCAPE">
                <div class="card-body">
                  <h5 class="card-title">Projet ACSCAPE</h5>
                  <p class="card-text">Developpement d'un EscapeGame Managment System (EGMS) en mode projet.</p>
                  <a href="https://github.com/ACSCAPE" target="_blank" class="btn btn-primary btncardprojet">Organisation GitHub</a>
                </div>
              </div>
              <div class="card col-lg-4 mb-4" style="width: 20rem; height: 25rem;">
                <div class="card-header d-flex justify-content-center">
                  <img class="iconeComp" src="ressources/js-logonb.png" onmouseover="this.src='ressources/js-logo.png'" onmouseout="this.src='ressources/js-logonb.png'" alt="logo PHP">
                </div>
                <img src="ressources/flappybird.PNG" class="card-img-top" alt="logo ACSCAPE">
                <div class="card-body">
                  <h5 class="card-title">Flappy Bird</h5>
                  <p class="card-text">Developpement d'un Flappy Bird en full Js.</p>
                  <a href="https://github.com/JBoulenger21/FlappyBird" target="_blank" class="btn btn-primary btncardprojet">Repository GitHub</a>
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
</section>

<?php
if(isset($_POST['nomContact']) && isset($_POST['emailContact']) && isset($_POST['sujetContact']) && isset($_POST['textContact'])){
  if (!empty($_POST['nomContact']) && !empty($_POST['emailContact']) && !empty($_POST['sujetContact']) && !empty($_POST['textContact'])){
    $nom = $_POST['nomContact'];
    $nom = check($nom);
    $mail = $_POST['emailContact'];
    $msg = $_POST['textContact'];
    $subject = $_POST['sujetContact'];
    $dest = "j.boulenger@codeur.online";
    $sujet = check($subject);
    $corp = check($msg);

    $mailheaders = "From: $mail\n";
    $mailheaders .= "MIME-version: 1.0\n";
    $mailheaders .= "Content-type: text/html; charset= utf-8\n";

       if (mail($dest, $sujet, 'Nom : '.$nom.'<br>'.$corp, $mailheaders))  {
        echo "Email envoyé avec succès";
        } else {
        echo "Échec de l'envoi de l'email...";
        }
        }else{
          echo 'Veuillez renseigner tous les champs.';
        }
}

function check($input){
  trim($input);
  stripslashes($input);
  htmlspecialchars($input);
  return $input;
}
 ?>
</section>

<?php
include('footer.php');
?>
