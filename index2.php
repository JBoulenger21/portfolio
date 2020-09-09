<?php
include('header.php');
?>
<header>

</header>
<div class="container">

<h1>Bienvenue !</h1>
<p>Bonjour, je m'appelle Julie BOULENGER, et je vais vous faire découvrir mon parcours...</p>
<h2>A propos</h2>
<p>Blablabla</p>
<h2>Compétences</h2>
<p>...</p>

</div>
<div class="container">

<h2>Contact</h2>

<?php
 /*$nom = isset($_POST['user_name']);
 $mail = isset($_POST['user_mail']);
 $msg = isset($_POST['user_message']);
 $subject = isset($_POST['user_subject']);*/

$mailSend = false;
$mail = '';

if (isset($_POST['user_name']) && isset($_POST['user_mail']) && isset($_POST['user_message']) && isset($_POST['user_subject']))
  {
  $nom = $_POST['user_name'];
  $mail = $_POST['user_mail'];
  $msg = $_POST['user_message'];
  $subject = $_POST['user_subject'];
  $dest = "j.boulenger@codeur.online";
  $sujet = $subject;
  $corp = $msg;
  $headers = "From: ". $mail;
  $mailheaders = "From: $mail\n";
  $mailheaders .= "MIME-version: 1.0\n";
  $mailheaders .= "Content-type: text/html; charset= utf-8\n";
  $nameError = '';
  $mailError = '';
  $msgError = '';
  $subjectError = '';
  }

  if(empty($nom)){$nameError ='Le champ Nom est vide !</br>';}
  if(empty($mail)){$mailError = 'Le champ mail est vide !</br>';}
  if(empty($msg)){$msgError = 'Le champ message est vide !</br>';}
  if(empty($subject)){$subjectError = 'Le champ sujet est vide !</br>';}
  if (!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$mail)) {
  echo "L'email n'est pas valide";
}

  else{
        mail($dest, $sujet, $corp, $headers);
        $mailSend = true;
      }
     if (isset($_POST) && $mailSend)  {
      echo "Email envoyé avec succès";
      } else {
      echo "Échec de l'envoi de l'email...";
    }

    /*else {

    if (!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$email)) {
    echo "L'email n'est pas valide";
   }*/
 ?>

 <form>
   <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Email address</label>
     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
   </div>
   <div class="mb-3">
     <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
 </form>

<!-- <form action= <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="post">
    <div class="mb-3">
        <label class="form-label" for="name">Nom :</label>
        <input type="text" id="name" name="user_name" >
        <?php if(isset($_POST['user_name'])) {
              echo $nameError ;}
          else if(!isset($_POST['user_name'])){echo '';} ?>
    </div>
    <div class="mb-3">
        <label class="form-label" for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="user_subject" >
        <?php if(isset($_POST['user_subject'])) {
              echo $subjectError ;}
          else if(!isset($_POST['user_subject'])){echo '';} ?>
    </div>
    <div class="mb-3">
        <label class="form-label" for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" >
        <?php if(isset($_POST['user_mail'])) {
              echo $mailError ;}
          else if(!isset($_POST['user_mail'])){echo '';} ?>
    </div>
    <div class="mb-3">
        <label class="form-label" for="msg">Message :</label>
        <textarea id="msg" name="user_message" ></textarea>
        <?php if(isset($_POST['user_message']) && empty($nom)) {
              echo $msgError ;}
          else if(!isset($_POST['user_message'])){echo '';} ?>
    </div>
    <div>
        <button  class="button btn btn-primary" type="submit">Envoyer le message</button>
    </div>
</form> -->

</div>


<?php
include('footer.php');
?>
