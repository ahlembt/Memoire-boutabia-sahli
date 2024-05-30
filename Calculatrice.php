<?php 
 
 if (!isset($_SESSION)) {
  session_start();
}
require('connexion.php');
?>
<?php

   
    if (!isset($_SESSION['auth'])) {
      header('Location:Login.php');}
      else {
    
        # code...
      
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>simulateur</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
    
</head>
<style>
     /* nav bar */
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
 
}

    	body{
    background: #FAE7C9;
    margin-top:20px;
    font-family: 'Poppins', sans-serif;
}
.logo-wrap {

display:block;
right:0;
top: 25px;
cursor: pointer;
font-size: 30px;
  font-weight: 600;
  position: relative;
  width: 20%;
  height: 55px;

  display: flex;
  
  
}
.logo-wrap a {
cursor: pointer;
font-family: 'Montserrat', sans-serif;
font-weight: 900;
font-size: 20px;
line-height: 20px;
text-transform:uppercase;
letter-spacing: 2px;
color: #fff;
transition : all 0.3s ease-out;
width: calc(100% - 100px);
text-decoration: none;
}
.logo-wrap a span{ 
color: #C8AE7D;
width: calc(100% - 100px);

}
.logo-wrap a:hover {
opacity: 0.9;
}





/* logooooooo */
nav{
  position: fixed;
  z-index: 99;
  width: 100%;
  top: 0;
  background: #65451F;
}
nav .wrapper{
  position: relative;
  max-width: 1300px;
  padding: 0px 30px;
  height: 70px;
  line-height: 70px;
  margin: auto;
  display: flex;
  
  justify-content: space-between;
}
.wrapper .logo a{
  color: #f2f2f2;
  font-size: 30px;
  font-weight: 600;
  text-decoration: none;
}
.wrapper .nav-links{
  display: inline-flex;
}
.nav-links li{
  list-style: none;
}
.nav-links li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding: 9px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.nav-links li a:hover{
  background: #3A3B3C;
}
.nav-links .mobile-item{
  display: none;
}
.nav-links .drop-menu{
  position: absolute;
  background: #65451F;
  width: 180px;
  line-height: 45px;
  padding-left: 0px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}
.nav-links li:hover .drop-menu,
.nav-links li:hover .mega-box{
  transition: all 0.3s ease;
  top: 70px;
  opacity: 1;
  visibility: visible;
}
.drop-menu li a{
  width: 100%;
  display: block;
  padding: 0 0 0 15px;
  font-weight: 400;
  border-radius: 0px;
}
.mega-box{
  position: absolute;
  left: 0;
  width: 100%;
  padding: 0 30px;
  top: 85px;
  opacity: 0;
  visibility: hidden;
}
.mega-box .content{
  background: #65451F;
  padding: 25px 20px;
  display: flex;
  width: 100%;
  justify-content: space-between;
  box-shadow: 0 6px 10px rgba(0,0,0,0.15);
}

.wrapper .btn{
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  display: none;
}
.wrapper .btn.close-btn{
  position: absolute;
  right: 30px;
  top: 10px;
}

@media screen and (max-width: 970px) {
  .wrapper .btn{
    display: block;
  }
  .wrapper .nav-links{
    position: fixed;
    height: 100vh;
    width: 100%;
    max-width: 350px;
    top: 0;
    left: -100%;
    background: #65451F;
    display: block;
    padding: 50px 10px;
    line-height: 50px;
    overflow-y: auto;
    box-shadow: 0px 15px 15px rgba(0,0,0,0.18);
    transition: all 0.3s ease;
  }
  .nav-links li{
    margin: 15px 10px;
  }
  .nav-links li a{
    padding: 0 20px;
    display: block;
    font-size: 20px;
  }
  .nav-links .drop-menu{
    position: static;
    opacity: 1;
    top: 65px;
    visibility: visible;
    padding-left: 20px;
    width: 100%;
    max-height: 0px;
    overflow: hidden;
    box-shadow: none;
    transition: all 0.3s ease;
  }
  #showDrop:checked ~ .drop-menu,
  #showMega:checked ~ .mega-box{
    max-height: 100%;
  }
  .nav-links .desktop-item{
    display: none;
  }
  .nav-links .mobile-item{
    display: block;
    color: #f2f2f2;
    font-size: 20px;
    font-weight: 500;
    padding-left: 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: all 0.3s ease;
  }
  .nav-links .mobile-item:hover{
    background: #3A3B3C;
  }
  .drop-menu li{
    margin: 0;
  }
  .drop-menu li a{
    border-radius: 5px;
    font-size: 18px;
  }
  .mega-box{
    position: static;
    top: 65px;
    opacity: 1;
    visibility: visible;
    padding: 0 20px;
    max-height: 0px;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  .mega-box .content{
    box-shadow: none;
    flex-direction: column;
    padding: 20px 20px 0 20px;
  }
  .mega-box .content .row{
    width: 100%;
    margin-bottom: 15px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .mega-box .content .row:nth-child(1),
  .mega-box .content .row:nth-child(2){
    border-top: 0px;
  }
  .content .row .mega-links{
    border-left: 0px;
    padding-left: 15px;
  }
  .row .mega-links li{
    margin: 0;
  }
  .content .row header{
    font-size: 19px;
  }
}
nav input{
  display: none;
}


form {
  padding: 10px;
  background-color: white;
  border-radius: 10px;
  position: absolute;
 
  
      justify-content: center;
      align-items: center;
  
  top:130px;
  float:right;
  margin-left: 450px;
}
form h1 {
  font-size: 20px;
  text-align: center;
  padding: 15px;
  text-decoration: solid;
}
form .separation {
  width: 100%;
  height: 1px;
  background-color: #C8AE7D;
}
form .corps-formulaire {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 30px;
  position: absolute;
}

form .corps-formulaire .groupe {
  position: relative; /* Pour mettre positionner l’élément dans le flux normal de la page */
  margin-top: 20px;
  display: flex;
  flex-direction: column;
}
form .corps-formulaire .btn-primary{
 
  justify-content: center;
  align-content: center;
    background-color: #C8AE7D;
    color: #fff;
    
    padding: 8px 30px;
    margin: 30px 0px;
    margin-left: 150px;
    border-radius: 30px;
    border-color:wheat ; 
    text-decoration: none;
   
    cursor: pointer;
    outline: none;
}
form .corps-formulaire .btn-primary:hover{
  transform: scale(1.05);
}
form .corps-formulaire .gauche .groupe input {
  margin-top: 5px;
  padding: 10px 5px 10px 30px;
  border: 1px solid #c9c9c9;
  outline-color: #C8AE7D;
  border-radius: 5px;
}
form .corps-formulaire .gauche .groupe i {
  position: absolute; /* positionné par rapport à son parent le plus proche positionné */
  left: 0;
  top: 25px;
  padding: 9px 8px;
  color: #C8AE7D;
}
form.vert{
  background-color: #d4edda;
      color: #155724;
      padding: 10px;
      margin-top: 20px;
      border-radius: 5px;
    }


</style>
<body>
          <!-- nav -->
          <nav>
            <div class="wrapper">
                <div class="logo-wrap">
                    <a href="#" class="hover-target"><span>Ven</span>Ta</a>
                </div>
              <input type="radio" name="slider" id="menu-btn">
              <input type="radio" name="slider" id="close-btn">
              <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                <li><a href="acceuil2.php">Accueil</a></li>
                
                <li><a href="publishoffre.php">Espace terrains</a>
                    <ul class="drop-menu">
                        
                        <li><a href="tet.php">Cree un offre </a></li>
                      </ul></li>
                      <li><a href="banks.php">Espace banque</a>
                      <ul class="drop-menu">
                      <li><a href="banque.php">Listes des banques </a></li>
                        <li><a href="Calculatrice.php">Simulateur Bancaire </a></li>
                      </ul></li>
               
                <li>
                  <a href="apropos.php" class="desktop-item">a propos</a>
                  <input type="checkbox" id="showMega">
                  <label for="showMega" class="mobile-item">Mega Menu</label>
                  
                </li>
               <li> <a href="parametre.php" class="desktop-item">Profil</a>
                <input type="checkbox" id="showDrop">
                <label for="showDrop" class="mobile-item">Profil</label>
                <ul class="drop-menu">
                  <li><a href="deconnexion.php">Deconnexion</a></li>
                  <li><a href="terme.php">terme et Conditions </a></li>
                </ul>
                  
                </li>
              </ul>
              <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
          </nav>
    <!-- end nav -->
    
<!-- calculate form -->
<div class="container">
  
  
  <form id="mortgageForm" style="width: 450px; height: 500px;">

<h1>Simulateur de pret</h1>
    <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche" style="width: 350px;">
    <div class="groupe">
      <label for="prixDeVente">Prix de vente :</label>
      <input type="number" class="form-control" id="prixDeVente" placeholder="Prix de vente" required>
      <i class="fas fa-dollar-sign"></i>
    </div>
    <div class="groupe">
      <label for="premierVersement">Premier versement :</label>
      <input type="number" class="form-control" id="premierVersement" placeholder="Premier versement" required>
      <i class="fas fa-dollar-sign"></i>
    </div>
    <div class="groupe">
      <label for="dureeDuPret">Durée du prêt (années):</label>
      <input type="number" class="form-control" id="dureeDuPret"placeholder="Durée du pret" required>
      <i class="fas fa-calendar"></i>
    </div>
    <div class="groupe">
      <label for="tauxInteret">Taux d'intérêt (%):</label>
      <input type="number" class="form-control" id="tauxInteret" placeholder="Taux d'intérêt" required>
      <i class="fas fa-percent"></i>
    </div>
  </div>
    <button type="button" class="btn-primary" onclick="Calcul()">Calculer</button>
    <br>
    <div id="result" class="vert" style="margin-left: 80px;"></div>
  </form>
</div>

<script>
  function Calcul(){
    let dureeenAnnees = document.getElementById('dureeDuPret').value;
    let prixVente = document.getElementById('prixDeVente').value;
    let prixVersement = document.getElementById('premierVersement').value;
    let tauxInteret = document.getElementById('tauxInteret').value;

    let dureeDuPretEnMois = dureeenAnnees * 12;
    let montantDuPret = prixVente - prixVersement;
    let tauxInteretPeriodique = tauxInteret / 100 / 12;

    let resultat = montantDuPret * (tauxInteretPeriodique * Math.pow(1 + tauxInteretPeriodique, dureeDuPretEnMois)) / (Math.pow(1 + tauxInteretPeriodique, dureeDuPretEnMois) - 1);

    document.getElementById('result').innerHTML = "Votre Paiment mensuele est " + resultat.toFixed(2);
  }
</script>
</body>

</html>
<?php }?>