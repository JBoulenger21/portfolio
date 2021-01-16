const logojs = document.getElementById('logojs');
const logohtml = document.getElementById('logohtml');
const logocss = document.getElementById('logocss');
const logoboostrap = document.getElementById('logobootstrap');
const logophp = document.getElementById('logophp');
const logowp = document.getElementById('logowp');
const btncompetence = document.getElementById('btncompetence');

if (btncompetence) {
  btncompetence.addEventListener('click', function(){
    document.getElementById('competencehtml').style.display = "none";
    document.getElementById('competencecss').style.display = "none";
    document.getElementById('competencebootstrap').style.display = "none";
    document.getElementById('competencephp').style.display = "none";
    document.getElementById('competencewp').style.display = "none";
    document.getElementById('competencejs').style.display = "none";
    btncompetence.style.display = "none";
  });

  logohtml.addEventListener('click', function(){
    document.getElementById('competencehtml').style.display = "block";
    btncompetence.style.display = "block";
  });

  logocss.addEventListener('click', function(){
    document.getElementById('competencecss').style.display = "block";
    btncompetence.style.display = "block";
  });

  logobootstrap.addEventListener('click', function(){
    document.getElementById('competencebootstrap').style.display = "block";
    btncompetence.style.display = "block";
  });

  logophp.addEventListener('click', function(){
    document.getElementById('competencephp').style.display = "block";
    btncompetence.style.display = "block";
  });

  logowp.addEventListener('click', function(){
    document.getElementById('competencewp').style.display = "block";
    btncompetence.style.display = "block";
  });

  logojs.addEventListener('click', function(){
    document.getElementById('competencejs').style.display = "block";
    btncompetence.style.display = "block";
  });
}
