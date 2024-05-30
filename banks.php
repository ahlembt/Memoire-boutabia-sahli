<?php

   
if (!isset($_SESSION)) {
    session_start();
  }
    if (!isset($_SESSION['auth'])) {
      header('Location:Login.php');}
      else {
        $nom_user = $_SESSION['name'];
        $prenom_user = $_SESSION['lastname'];
        $id_auteur = $_SESSION['id_user'];
        # code...
      
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce-web</title>
    <link rel="stylesheet" href="banks.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <li><a href="terme.php">terme et Conditions </a></li>
                </ul>
                  
                </li>
              </ul>
              <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
          </nav>
    <div class="row">
        <div class="col-2">
            <h1>Simplifier <br> Votre Projet !</h1>
            <P>Le système bancaire algérien comprend 
                une diversité d'institutions financières,
                 telles que la Banque Nationale d'Algérie (BNA), 
                 la Banque Extérieure d'Algérie (BEA), la Banque de l'Agriculture et du Développement Rural (BADR), le Crédit Populaire d'Algérie (CPA) et la Banque de Développement Local (BDL).
                  Ces banques, qu'elles soient publiques ou privées, offrent une gamme étendue de services bancaires pour répondre aux besoins variés des particuliers et des entreprises, contribuant ainsi au dynamisme de l'économie nationale.







 <br> </P>
            <a href="banque.php" class="btn">Commencer &#8594;</a>
        </div>
        <div class="col-2">
            <img src="vent.png" alt="">
    </div>
 </div>
</div>









    </body>
    </html><?php }?>