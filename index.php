<?php
include('header.php');
?>
<!-- <header>
  <div class="container">
    <h1 class="text-center">Julie BOULENGER - Developpeuse web</h1>
  </div>
</header> -->

  <div class="row m-0">
    <div class="sidebar sidebarleft ">
      <div class="">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link " href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
      <div class="content p-0">
        <div class="container">
          <div class="main">
            <h1 class="text-center">PORTFOLIO</h1>
            <h2>Venez découvrir mon univers !</h2>
            <p>Bonjour, je m'appelle Julie BOULENGER, et je vais vous faire découvrir mon parcours...</p>
            <h3>A propos</h3>
            <p>Blablabla</p>
            <h3>Compétences</h3>
            <p>...</p>

          </div>
        </div>
      </div>
      <div class="sidebar sidebarright mx-auto p-0">
        <ul>
          <li><a href="https://www.linkedin.com/in/julieboulenger21/" target="_blank">LinkedIn</a></li>
          <li><a href="https://github.com/JBoulenger21" target="_blank">GitHub</a></li>
          <li><a href="ressources/CV_Julie_BOULENGER_Dev.pdf" download="CV Julie Boulenger" target="_blank">CV</a></li>
        </ul>
      </div>
  </div>

<div class="container">

<h2 id="contact">Contact</h2>

<form>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
    <input type="email" class="form-control" id="EmailContact" placeholder="name@example.com" required>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
    <textarea class="form-control" id="TextContact" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btnContact">Me contacter</button>
</form>
</div>


<?php
include('footer.php');
?>
