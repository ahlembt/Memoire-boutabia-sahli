


<?php 

if (!isset($_SESSION)) {
  session_start();
}
require('connexion.php');
?>
<?php

    if (!isset($_SESSION['auth'])) {
      header('Location:Login.php');}
     
        # code...
      
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
  
?><?php require('hom.php');?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
  <head>
  <title>Formulaire de vente d'un terrain</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
     
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

       body {
      min-height: 100%;
      background-color:#FAE7C9;
      background-size: cover; /* Cover the entire viewport */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Do not repeat the image */
    font-family: 'Poppins', sans-serif;
	display: flex;
	
	flex-direction: column;

	
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h2 {
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 100px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #095484; 
      }
      .banner {
      position: relative;
      height: 210px;
      background: linear-gradient(to right, #EAC696,#65451F );
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #095484;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
        

      .logo-wrap {

display:block;
right:0;
top: 20px;
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
  align-items: center;
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
  /* custom scroll bar */
  ::-webkit-scrollbar {
    width: 10px;
  }
  ::-webkit-scrollbar-track {
    background: #242526;
  }
  ::-webkit-scrollbar-thumb {
    background: #3A3B3C;
  }
  #menu-btn:checked ~ .nav-links{
    left: 0%;
  }
  #menu-btn:checked ~ .btn.menu-btn{
    display: none;
  }
  #close-btn:checked ~ .btn.menu-btn{
    display: block;
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
input[type=checkbox].terme {
    display: flex;
}



.terme.check:before {
    content: "";
    position: absolute;
    top: 2px;
    left: -20px; /* Adjusted position to move checkbox to the left */
    width: 16px;
    height: 16px;
    border-radius: 2px;
    border: 1px solid #095484;
}

.terme input[type=checkbox]:checked + label.check:before {
    background: #095484;
}

.terme.check:after {
    content: "";
    position: absolute;
    top: 6px;
    left: -16px; /* Adjusted position to move checkmark to the left */
    width: 8px;
    height: 4px;
    border: 3px solid #fff;
    border-top: none;
    border-right: none;
    transform: rotate(-45deg);
    opacity: 0;
}

.terme input[type=checkbox]:checked {
    opacity: 1;
}

    </style>
    </head>
  <body>
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
                  <li><a href="terme.php">terme et Conditions</a></li>
                </ul>
                  
                </li>
              </ul>
              <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
          </nav>

<div class="testbox">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <?php if (isset($errorMsg)){ echo'<p>'.$errorMsg.'</p>';}elseif(isset($successMsg)) {
            echo'<p>'.$successMsg.'</p>';     
              # code...
        }?>
        
        <div class="banner">
    <h1>Formulaire de vente du terrain</h1>
</div>

<h2>Details sur le terrain</h2>
<form method="POST" action="process_form.php" enctype="multipart/form-data">
    <div class="item">
        <p>Proposez un titre pour votre terrain</p>
        <input type="text" name="titre" placeholder="titre" required />
        <p>Numero du terrain</p>
        <input type="text" size="10" name="num_terrain" placeholder="ex:213" required />
    </div>
    <div class="item">
        <p>Adresse</p>
        <input type="text" name="adress" placeholder="adress" required />
        <div class="city-item">
            <input type="text" name="wilaya" placeholder="Wilaya" required />
            <input type="text" name="comune" placeholder="Commune" required />
            <input type="text" name="code_postale" placeholder="Code Postal" required />
        </div>
    </div>
    <div class="item">
        <p>Surface</p>
        <input type="text" name="surface" placeholder="ex:300 M²" required />
    </div>
    <div class="item">
        <p>Prix</p>
        <input type="text" name="prix" placeholder="ex:200,000 DA" required />
    </div>
    <div class="item">
        <p>Description de votre terrain</p>
        <textarea name="description" rows="3" required></textarea>
    </div>
    <div class="item">
        <p>Type du terrain</p>
        <select name="type_terrain" required>
            <option value="1">Terrain à bâtir</option>
            <option value="2">Terrain agricole</option>
        </select>
    </div>
    <div class="item">
        <p>La vue du terrain</p>
        <select name="vue_terrain" required>
        <option value="1">tout les vue</option>
            <option value="2">Vue sur mer</option>
            <option value="3">Vue sur terrain</option>
            <option value="4">Vue sur route</option>
        </select>
    </div>
    <div class="item">
        <p>Ajouter des photos du terrain</p>
        <input type="file" name="image" multiple required />
    </div>
    <div class="item">
        <p>Ajouter votre act de terrain</p>
        <input type="file" name="act_terrain" required />
    </div>
    <div class="item">
        <p>Ajouter votre livret de terrain</p>
        <input type="file" name="livret_terrain" required />
    </div>
    <div class="item">
         
                <input type="checkbox" name="terms" class="terme" style="margin-bottom:0px;width: 20px;" required>
                <span>J'accepte <a href="terme.php">les termes et conditions</a></span>
            
            </div>
   
   
        <div class="btn-block">
            <button type="submit" name="validate">Publier</button>
        </div>
    </form>
</div>
</body>
<script>
    const selectAct = document.querySelector('.select-act');
    const selectLivret = document.querySelector('.select-livret');
    const inputAct = document.querySelector('#file-act');
    const inputLivret = document.querySelector('#file-livret');

    selectAct.addEventListener('click', function () {
        inputAct.click();
    });

    selectLivret.addEventListener('click', function () {
        inputLivret.click();
    });
   
</script>

</html>
