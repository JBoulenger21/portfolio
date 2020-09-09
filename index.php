<?php
include('header.php');
?>
<header>
  <div class="container">
    <h1 class="text-center">Julie BOULENGER - Developpeuse web</h1>
  </div>
</header>

  <div class="row m-0">
    <div class="col-1 sidebarleft mx-auto p-0">
      <p class="mb-0 d-flex">Sidebar</p>
    </div>
      <div class="content col-10 p-0">
        <div class="container">
          <div class="main">
            <h1>Main</h1>
            <h2>Bienvenue !</h2>
            <p>Bonjour, je m'appelle Julie BOULENGER, et je vais vous faire découvrir mon parcours...</p>
            <h3>A propos</h3>
            <p>Blablabla</p>
            <h3>Compétences</h3>
            <p>...</p>

          </div>
        </div>
      </div>
      <div class="col-1 sidebarright mx-auto p-0">
        <p>Sidebar</p>
      </div>
  </div>

<div class="container">

<h2>Contact</h2>

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
</div>


<?php
include('footer.php');
?>
