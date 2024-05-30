<?php  
 
 if (!isset($_SESSION)) {
  session_start();
}

require('connexion.php');
?>

<?php

   
    if (!isset($_SESSION['auth'])) {
      header('Location:Login.php');}
      else{  // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
        $nom_user = $_SESSION['name'];
        $prenom_user = $_SESSION['lastname'];
        $id_auteur = $_SESSION['id_user'];
     
        $id = '';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
        }
        if (!empty($id)) {
          $sql = "SELECT * FROM formul WHERE id = ?";
          $Ofr = $access->prepare($sql);
          $executeOK = $Ofr->execute([$id]);
          $result = $Ofr->fetchAll(PDO::FETCH_ASSOC);
      }
  
  

?>
<?php require('rdvcode.php'); ?>


<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Créer un rdv</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    /> 
 
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");
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
/* end navbar */
form {
    margin: 20px auto;
    margin-top:150px;
    padding: 20px;
    width: 600px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
form h1 {
  font-size: 20px;
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
}
form .corps-formulaire .groupe {
  position: relative; /* Pour mettre positionner l’élément dans le flux normal de la page */
  margin-top: 20px;
  display: flex;
  flex-direction: column;
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
  top: 30px;

  padding: 9px 8px;
  color: #C8AE7D;
}
form .corps-formulaire .gauche .groupe select {
  margin-top: 5px;
  padding: 10px 5px 10px 30px;
  border: 1px solid #c9c9c9;
  outline-color: #C8AE7D;
  border-radius: 5px;
}

form .corps-formulaire .droite {
  margin-left: 40px;
}
form .corps-formulaire .droite .groupe {
  height: 100%;
}
form .corps-formulaire .droite .groupe textarea {
  margin-top: 5px;
  padding: 10px;
  background-color: #f1f1f1;
  border: 2px solid #C8AE7D;
  outline: none;
  border-radius: 5px;
  resize: none;
  height: 72%;
}
form .pied-formulaire button {
  margin-top: 10px;
  background-color: #C8AE7D;
  
  color: white;
  font-size: 15px;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  transition: transform 0.5s;
}
form .pied-formulaire button:hover {
  transform: scale(1.05);
}
@media screen and (max-width: 920px) {
  form .corps-formulaire .droite {
    margin-left: 0px;
  }
}
  </style>
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
          <?php foreach ($result as $row) { ?>
          <div class="form-container">
    <form method="POST" enctype="multipart/form-data" action="rdvcode.php">
      <h1>Prendre un Rendez-vous  </h1>
      <?php if (isset($errorMsg)){ echo'<p>'.$errorMsg.'</p>';}elseif(isset($successMsg)) {
        echo'<p>'.$successMsg.'</p>';          # code...
    }?>
      <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
        
          
          <div class="groupe">
            <label>Votre adresse e-mail</label>
            <input type="email" name="email" id="email" autocomplete="off" />
            <i class="fas fa-envelope"></i>
          </div>
          <div class="groupe">
            <label>Wilaya d'annonce</label>
            
              
              <select  class="form-select" id="liste_wilaya" name="wilaya" id="tel" onchange="valider('','')" required>
                 
                <option value="1">01 - Adrar</option>
                <option value="2">02 - Chlef</option>
                <option value="3">03 - Laghouat</option>
                <option value="4">04 - Oum-El-Bouaghi</option>
                <option value="5">05 - Batna</option>
                <option value="6">06 - Béjaïa</option>
                <option value="7">07 - Biskra</option>
                <option value="8">08 - Béchar</option>
                <option value="9">09 - Blida</option>
                <option value="10">10 - Bouira</option>
                <option value="11">11 - Tamanrasset</option>
                <option value="12">12 - Tébessa</option>
                <option value="13">13 - Tlemcen</option>
                <option value="14">14 - Tiaret</option>
                <option value="15">15 - Tizi-Ouzou</option>
                <option value="16">16 - Alger</option>
                <option value="17">17 - Djelfa</option>
                <option value="18">18 - Jijel</option>
                <option value="19">19 - Sétif</option>
                <option value="20">20 - Saida</option>
                <option value="21">21 - Skikda</option>
                <option value="22">22 - Sidi-Bel-Abbès</option>
                <option value="23" selected="selected">23 - Annaba</option>
                <option value="24">24 - Guelma</option>
                <option value="25">25 - Constantine</option>
                <option value="26">26 - Médéa</option>
                <option value="27">27 - Mostaganem</option>
                <option value="28">28 - MSila</option>
                <option value="29">29 - Mascara</option>
                <option value="30">30 - Ouargla</option>
                <option value="31">31 - Oran</option>
                <option value="32">32 - El-Bayadh</option>
                <option value="33">33 - Illizi</option>
                <option value="34">34 - Bordj-Bou-Arreridj</option>
                <option value="35">35 - Boumerdès</option>
                <option value="36">36 - El-Tarf</option>
                <option value="37">37 - Tindouf</option>
                <option value="38">38 - Tissemsilt</option>
                <option value="39">39 - El-Oued</option>
                <option value="40">40 - Khenchela</option>
                <option value="41">41 - Souk-Ahras</option>
                <option value="42">42 - Tipaza</option>
                <option value="43">43 - Mila</option>
                <option value="44">44 - Aïn-Defla</option>
                <option value="45">45 - Naâma</option>
                <option value="46">46 - Aïn-Témouchent</option>
                <option value="47">47 - Ghardaia</option>
                <option value="48">48 - Relizane</option>
                <!-- Autres options de wilaya -->
              </select>
            <i class="fas fa-home"></i>
          
          <div class="groupe">
            <label>Date de rendez vous</label>
            <input type="date" name="date_rdv"id="date_rdv" autocomplete="off" />
            <i class="fas fa-calendar"></i>
          </div>
          <div class="groupe">
            <label>Reference</label>
            
            
<input type="number" name="ref" id="ref" value="<?php echo htmlspecialchars($row['id']) ?>" readonly/>
            <i class="fas fa-mobile"></i>
          </div>
        </div>
       
        </div>

        <div class="droite">
          <div class="groupe">
            <label>Message</label>
            <textarea name="msg" placeholder="Saisissez ici..."></textarea>
          </div>
        </div>
      </div>

      <div class="pied-formulaire" align="center">
        <button type="submit" name="demande" id="demande" >Envoyer la demande</button>
      </div>
    </form>
    <?php }?>
  </div>
  </body>
 
</html>
<?php } ?>