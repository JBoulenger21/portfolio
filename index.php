<?php
include('header.php');
?>
<header>
  <div class="container">
    <h1 class="text-center">Julie BOULENGER - Developpeuse web</h1>
  </div>
</header>
<section class="container">
  <div class="row m-0">
    <div class="sidebar sidebarleft">
      <div>
        <div class="item">
            <a href="#">Accueil</a>
        </div>
      </div>
      <div>
        <div class="item">
            <a href="#about">A<span>_</span>propos</a>
        </div>
      </div>
      <div>
        <div class="item">
            <a href="#competences">Compétences</a>
        </div>
      </div>
      <div>
        <div class="item">
            <a href="#projects">Projets</a>
        </div>
      </div>
      <div>
        <div class="item">
            <a href="#contact">Contact</a>
        </div>
      </div>
    </div>
    <div class="sidebar sidebarright">
      <div>
          <div class="item"><a href="https://www.linkedin.com/in/julieboulenger21/" target="_blank"><img class="logocontact" src="ressources/linkedin.png" alt="linkedin logo"></img></a></div>
      </div>
      <div>
          <div class="item"><a href="https://github.com/JBoulenger21" target="_blank"><img class="logocontact" src="ressources/github.png" alt="github logo"></img></a></div>
      </div>
      <div>
          <div class="item"><a href="ressources/CV_JulieBoulenger_DevWeb.pdf" download="CV Julie Boulenger" target="_blank">CV</a></div>
      </div>
    </div>
    <div class="content p-0">
      <div class="container">
        <div class="col-lg-10 col-sm-8 mx-auto">
          <h1 class="text-center">PORTFOLIO</h1>
          <h2>Venez découvrir mon univers !</h2>
          <div class="d-flex justify-content-center" >
            <img src="ressources/avatartest3bis.png" alt="Avatar Julie Boulenger moitié dessin moitié photo">
          </div>
          <h3 id="about">A propos</h3>
          <p></p>
          <h3 id="competences">Compétences</h3>
          <div class="logoCompetences d-flex justify-content-between">
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
                  <a href="https://github.com/JBoulenger21/file_explorer" target="_blank" class="btn btn-primary">Repository GitHub</a>
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
                  <a href="https://github.com/JBoulenger21/file_explorer" target="_blank" class="btn btn-primary">Repository GitHub</a>
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
                  <a href="https://github.com/ACSCAPE" target="_blank" class="btn btn-primary">Organisation GitHub</a>
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
                  <a href="https://github.com/JBoulenger21/FlappyBird" target="_blank" class="btn btn-primary">Repository GitHub</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3">
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
