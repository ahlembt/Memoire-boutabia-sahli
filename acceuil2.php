
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
    <title>Venta</title>
 
    

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
</head>
<body>
    <!-- Your navigation and other HTML content here -->

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
                
                <li><a href="publishoffre.php?">Espace terrains</a>
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
               <li> <a href="parametre.php?" class="desktop-item">Profil</a>
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
<style>
     /* nav bar */
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    font-family: 'Poppins', sans-serif;
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

.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col-2{
    flex-basis: 50%;
    min-width: 300px;
}
.col-2{
    max-width: 100%;
    padding: 50px 0px;
}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0px;
}
.btn{
    display: inline-block;
    background-color: #C8AE7D;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0px;
    border-radius: 30px; 
    text-decoration: none;
    transition: 0.5s;
}
.btn:hover{
    background-color: #563434;
}
.header{
    background: radial-gradient(#fff,#ffd6d6);
}
.header .row{
    margin-top: 70px;
}
/* features categories */
.categories{
    margin: 70px 0px;
}
.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 100%;
}
.small-container{
    margin: auto;
    max-width: 120%;
    margin-left: 25px;
    margin-right: 25px;
}
.col-4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: 0.5s;
}
.col-4 img{
    max-width: 100%;
}
.title{
    margin: 0px auto 80px;
    text-align: center;
    position: relative;
    line-height: 60px;
    color: #555;
}
.title::after{
    content: "";
    width: 80px;
    height: 5px;
    background: #C8AE7D;
    border-radius: 5px;
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
}
h4{
    color: #555;
    font-weight: normal;
}
.col-4 p{
      font-size: 14px;
}
.ratting .fa{
    color: #C8AE7D;
}
.col-4:hover{
    transform: translateY(-5px);
}
/* offer */
.offer{
    background: radial-gradient(#fff,#65451F);
    margin-top: 80px;
    padding: 30px 0px;
}
.col-2 .offer-img{
    max-width: 100%;
}
small{
    color: #555;
}
p{
  font-weight: bold;
  font-size: 15px;
    color: #3a3a3a;
}
/* testimonial */
.testimonial{
    padding-top: 100px;
}
.testimonial .col-3{
    padding: 40px 20px;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
    transition: 0.5s;
}
.testimonial .col-3 img{
    width: 50px;
    margin-top: 20px;
    border-radius: 50%;
}
.testimonial .col-3:hover{
    transform: translateY(-10px);
}
.fa.fa-quote-left{
    color: #C8AE7D;
    font-size: 34px;
}
.col-3 p{
    color: #777;
    font-size: 12px;
    margin: 12px 0px;
}
.testimonial .col-3 h3{
    font-weight: 600;
    font-size: 16px;
    color: #555;
}
/* bands */
.bands{
    margin: 100px auto;
}
.col-5{
    width: 160px;
}
.col-5 img{
    width: 100%;
    cursor: pointer;
    filter: grayscale(100%);
}
.col-5 img:hover{
    filter: grayscale(0);
}
/* footer */
.footer{
    background: #000;
    color: #8a8a8a;
    font-size: 14px;
    padding: 100px 0px;
    max-width: 120%;
}
.footer p{
    color: #8a8a8a;
}
.footer h3{
    color: #fff;
    margin-bottom: 20px;
}
.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
    min-width: 250px;
    margin-bottom: 20px;
}
.footer-col-1{
    flex-basis: 30%;
}
.footer-col-2{
    flex: 1;
    text-align: center;
    align-items: center;
}

.footer-col-3, .footer-col-4{
    flex-basis: 12%;
    text-align: center;
}
ul{
    list-style: none;
}
.app-logo{
    margin-top: 20px;
}
.app-logo img{
    width: 140px;
}
.footer hr{
    border: none;
    background: #5b5b5b;
    height: 1px;
    margin: 20px 0px;
}
.copyright{
    text-align: center;
    
}
.copyright p{
    margin-bottom: -5px;
}
.menu-icon{
    width: 28px;
    margin-left: 20px;
    display: none;
}
/* media query */
@media only screen and (max-width: 800px){
    nav ul{
        position: absolute;
        top: 70px;
        left: 0px;
        background: #333;
        width: 100%;
        overflow: hidden;
        transition: max-height 0.5s;
    }
    nav ul li{
        display: block;
        margin-right: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    nav ul li a{
        color: #fff;
    }
    .menu-icon{
        display: block;
        cursor: pointer;
    }
}
/* media query for less than 600 screen size */
@media only screen and (max-width: 600px){
    .row{
        text-align: center;
    }
    .col-2, .col-3, .col-4{
        flex-basis: 100%;
    }
}












;
/* CSS reset */
*,
*::after,
*::before {
  box-sizing: inherit;
  margin: 0;
  padding: 0;
}

html { font-size: 62.5%; }

body {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
  position: relative;
}

/* Typography =======================*/

/* Headings */

/* Main heading for card's front cover */
.card-front__heading {
  font-size: 1.5rem;
  margin-top: .25rem;
}

/* Main heading for inside page */
.inside-page__heading { 
  padding-bottom: 1rem; 
  width: 100%;
}

/* Mixed */

/* For both inside page's main heading and 'view me' text on card front cover */
.inside-page__heading,
.card-front__text-view {
  font-size: 1.3rem;
  font-weight: 800;
  margin-top: .2rem;
}

.inside-page__heading--city,
.card-front__text-view--city { color: #796e6c; }

.inside-page__heading--ski,
.card-front__text-view--ski { color:#796e6c;  }

.inside-page__heading--beach,
.card-front__text-view--beach { color:#796e6c ; }

.inside-page__heading--camping,
.card-front__text-view--camping { color:#796e6c ; }

/* Front cover */

.card-front__tp { color: #fafbfa; }

/* For pricing text on card front cover */
.card-front__text-price {
  font-size: 1.2rem;
  margin-top: -.2rem;
}

/* Back cover */

/* For inside page's body text */
.inside-page__text {
  color: #333;
}

/* Icons ===========================================*/

.card-front__icon {
  fill: #fafbfa;
  font-size: 3vw;
  height: 3.25rem;
  margin-top: -.5rem;
  width: 3.25rem;
}

/* Buttons =================================================*/

.inside-page__btn {
  background-color: transparent;
  border: 3px solid;
  border-radius: .5rem;
  font-size: 1.2rem;
  font-weight: 600;
  margin-top: 2rem;
  overflow: hidden;
  padding: .7rem .75rem;
  position: relative;
  text-decoration: none;
  transition: all .3s ease;
  width: 90%;
  z-index: 10;
}

.inside-page__btn::before { 
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: scaleY(0);
  transition: all .3s ease;
  width: 100%;
  z-index: -1;
}









.inside-page__btn:hover { 
  color: #fafbfa;
}

.inside-page__btn:hover::before { 
  transform: scaleY(1);
}

/* Layout Structure=========================================*/

.main {
 
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 50vh;
  width: 100%;
}

/* Container to hold all cards in one place */
.card-area {
  align-items: center;
  display: flex;
  flex-wrap: nowrap;
  height: 100%;
  justify-content: space-evenly;
  padding: 1rem;
}

/* Card ============================================*/

/* Area to hold an individual card */
.card-section {
  align-items: center;
  display: flex;
  height: 100%;
  justify-content: center;
  width: 100%;
}

/* A container to hold the flip card and the inside page */
.card {
  background-color: rgba(0,0,0, .05);
  box-shadow: -.1rem 1.7rem 6.6rem -3.2rem rgba(0,0,0,0.5);
  height: 15rem;
  position: relative;
  transition: all 1s ease;
  width: 15rem;
}

/* Flip card - covering both the front and inside front page */

/* An outer container to hold the flip card. This excludes the inside page */
.flip-card {
  height: 15rem;
  perspective: 100rem;
  position: absolute;
  right: 0;
  transition: all 1s ease;
  visibility: hidden;
  width: 15rem;
  z-index: 100;
}

/* The outer container's visibility is set to hidden. This is to make everything within the container NOT set to hidden  */
/* This is done so content in the inside page can be selected */
.flip-card > * {
  visibility: visible;
}

/* An inner container to hold the flip card. This excludes the inside page */
.flip-card__container {
  height: 100%;
  position: absolute;
  right: 0;
  transform-origin: left;
  transform-style: preserve-3d;
  transition: all 1s ease;
  width: 100%;
}

.card-front,
.card-back {
  backface-visibility: hidden;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

/* Styling for the front side of the flip card */

/* container for the front side */
.card-front {
  background-color:#65451F;
  height: 15rem;
  width: 15rem;
}

/* Front side's top section */
.card-front__tp {
  align-items: center;
  clip-path: polygon(0 0, 100% 0, 100% 90%, 57% 90%, 50% 100%, 43% 90%, 0 90%);
  display: flex;
  flex-direction: column;
  height: 12rem;
  justify-content: center;
  padding: .75rem;
}

.card-front__tp--city {
  background: linear-gradient(
    to bottom,
   
  );
}

.card-front__tp--ski {
  background: linear-gradient(
    to bottom,
    #65451F,
    #65451F,
  );
}

   
    .card-front__tp--beach {
  background: linear-gradient(
    to bottom,
    #65451F,
    #65451F,
  );
}

.card-front__tp--camping {
  background: linear-gradient(
    to bottom,
    #65451F,
    #65451F,
  );
}

/* Front card's bottom section */
.card-front__bt {
  align-items: center;
  display: flex;
  justify-content: center;
}

/* Styling for the back side of the flip card */

.card-back {
  background-image:url(https://i.pinimg.com/236x/45/d0/a5/45d0a580fab49f09b4e68572c76e5ed2--free-printable-numbers-easy-a.jpg);
  transform: rotateY(180deg);
}

/* Specifically targeting the <video> element */
.video__container {
  clip-path: polygon(0% 0%, 100% 0%, 90% 50%, 100% 100%, 0% 100%);
  height: auto;
  min-height: 100%;
  object-fit: cover;
  width: 100%;
}

/* Inside page */

.inside-page {
  background-color: #fafbfa;
  box-shadow: inset 20rem 0px 5rem -2.5rem rgba(0,0,0,0.25);
  height: 100%;
  padding: 1rem;
  position: absolute;
  right: 0;
  transition: all 1s ease;
  width: 15rem;
  z-index: 1;
}

.inside-page__container {
  align-items: center;
  display: flex;
  flex-direction: column;
  height: 100%;
  text-align: center; 
  width: 100%;
}

/* Functionality ====================================*/

/* This is to keep the card centered (within its container) when opened */
.card:hover {
  box-shadow:
  -.1rem 1.7rem 6.6rem -3.2rem rgba(0,0,0,0.75);
  width: 30rem;
}

/* When the card is hovered, the flip card container will rotate */
.card:hover .flip-card__container {
  transform: rotateY(-180deg);
}

/* When the card is hovered, the shadow on the inside page will shrink to the left */
.card:hover .inside-page {
  box-shadow: inset 1rem 0px 5rem -2.5rem rgba(0,0,0,0.1);
}

/* Footer ====================================*/

.footer {
  background-color: #333;
   margin-top: 3rem;
  padding: 1rem 0;
  width: 100%;
}

.footer-text {
  color: #fff;
  font-size: 1.2rem;
  text-align: center;
}


/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #65451F;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 169px;	
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #97A5CE;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color :#65451F ;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}

.social-panel h4 {
	margin: 20px 0;
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color:#65451F ;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}

.floating-btn {
	border-radius: 26.5px;
	background-color:#65451F ;
	border: 1px solid #65451F;
	box-shadow: 0 16px 22px -17px #65451F;
	color: #fff;
	cursor: pointer;
	font-size: 16px;
	line-height: 20px;
	padding: 12px 20px;
	position: fixed;
	bottom: 20px;
	right: 20px;
	z-index: 999;
}

.floating-btn:hover {
	background-color: #ffffff;
	color: #65451F;
}

.floating-btn:focus {
	outline: none;
}

.floating-text {
	background-color: #65451F;
	border-radius: 10px 10px 0 0;
	color: #fff;
	font-family: 'Muli';
	padding: 7px 15px;
	position: fixed;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	text-align: center;
	z-index: 998;
}

.floating-text a {
	color: #FF7500;
	text-decoration: none;
}

@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}

</style>
    <div class="row">
        <div class="col-2">
            <h1>Bonjour Mr <?php echo $_SESSION['name']; ?><br><?php echo $_SESSION['lastname']; ?></h1>
            <P>Notre site vise à simplifier et à faciliter le processus d'achat, de vente pour les utilisateurs.<br></P>

        </div>
        <div class="col-2">
            <img src="https://thumbs.dreamstime.com/b/beautiful-young-female-construction-contractor-tools-isolat-isolated-white-background-46080492.jpg" alt="">
    </div>
 </div>
</div>
<!-- feature categories -->
<!-- feature products -->
<div class="small-container">
    <h2 class="title">Les Plus visiter</h2>
    <div class="row">
        <div class="col-4">
            <img src="vente1.jpg" alt="" >
            <h4>Terrain a batir pres d'annaba  </h4>
            <div class="ratting">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
            </div>
            <p>120,000,000 DA</p>
        </div>
        <div class="col-4">
            <img src="vente2.jpg" alt="" >
            <h4>Terrain a batir pres de skikda</h4>
            <div class="ratting">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half-o"></i>
               <i class="fa fa-star-o"></i>
            </div>
            <p>650,000.00 DA</p>
        </div>
        <div class="col-4">
            <img src="vente3.jpg" alt="" >
            <h4>Terrain agricole au centre de batna</h4>
            <div class="ratting">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half-o"></i>
            </div>
            <p>700,000 DA</p>
        </div>
        <div class="col-4">
            <img src="vente4.jpg" alt="" >
            <h4>Terrain agricole pres de oran</h4>
            <div class="ratting">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
            </div>
            <p>100,000,000 DA</p>
        </div>
    </div>
    
<!--  Offer-->





<main class="main">
    <h2 class="title">Etapes pour prendre votre chois des terrain</h2>
    <section class="card-area">

        <!-- Card: City -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--city">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                           <g>
                               <path d="M49.7,22c-1.1,0-2,0.9-2,2v32.2c0,1.1,0.9,2,2,2s2-0.9,2-2V24C51.7,22.9,50.8,22,49.7,22z"/>
                               <path d="M13,29.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7
                                   V7.1h24.8v15.3c0,1.1,0.9,2,2,2s2-0.9,2-2V5.1c0-1.1-0.9-2-2-2H3.7c-1.1,0-2,0.9-2,2v51c0,1.1,0.9,2,2,2s2-0.9,2-2V36.5H13
                                   c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3H13z"/>
                               <path d="M58,11.9c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0
                                   c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1-0.1-0.2-0.1
                                   c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0
                                   c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0.1l-12.6,7.8
                                   c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2
                                   c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0v5.4H22.1
                                   c-1.1,0-2,0.9-2,2v28.9c0,1.1,0.9,2,2,2s2-0.9,2-2V29.3h17.3v26.9c0,1.1,0.9,2,2,2s2-0.9,2-2V21l8.6-5.3v40.5c0,1.1,0.9,2,2,2
                                   s2-0.9,2-2V12.1C58,12,58,12,58,11.9z"/>
                               <path d="M28,31L28,31c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,31,28,31z"/>
                               <path d="M33.5,31L33.5,31c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,31,33.5,31z"/>
                               <path d="M28,36L28,36c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,36,28,36z"/>
                               <path d="M33.5,36L33.5,36c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,36,33.5,36z"/>
                           </g>
                           </svg>
                          
                           <h2 class="card-front__heading">
                            premier
                        </h2>
                        <p class="card-front__text-price">
                          Inscription
                        </p>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--city">
                                   voir
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                          
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        
                        <p class="inside-page__text">
                        "Créez votre compte dès maintenant pour accéder à toutes nos offres et services exclusifs."
                        </p>
                       
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Ski -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--ski">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                           <g>
                               <path d="M58.8,54.5L38.5,19.3c-0.4-0.6-1-1-1.7-1s-1.4,0.4-1.7,1L14.8,54.5c-0.4,0.6-0.4,1.4,0,2c0.4,0.6,1,1,1.7,1h40.6
                                   c0.7,0,1.4-0.4,1.7-1C59.2,55.9,59.2,55.1,58.8,54.5z M36.8,24.3l5.8,10c-0.5-0.2-1.1-0.3-1.7-0.3c-2.5,0-3.7,1.5-4.6,2.5
                                   c-0.7,0.9-1,1.1-1.5,1.1s-0.8-0.2-1.5-1.1c-0.6-0.7-1.3-1.5-2.4-2.1L36.8,24.3z M20,53.5l8.9-15.4c0.5,0,0.7,0.3,1.4,1.1
                                   c0.8,1,2.1,2.5,4.6,2.5s3.7-1.5,4.6-2.5c0.7-0.9,1-1.1,1.5-1.1c0.5,0,0.8,0.2,1.5,1.1c0.8,1,2.1,2.5,4.5,2.5l6.8,11.8H20z"/>
                               <path d="M14.7,51.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H6.4l9.1-15.7c0.6,0.6,1.5,1.3,2.9,1.3c1.8,0,2.8-1.2,3.3-1.8
                                   c0.1-0.1,0.2-0.2,0.3-0.3c0.1,0.1,0.2,0.2,0.3,0.3c0.5,0.6,1.5,1.8,3.3,1.8c1.1,0,2-0.9,2-2c0-1.1-0.9-2-1.9-2
                                   c-0.1-0.1-0.2-0.2-0.3-0.4c-0.5-0.6-1.5-1.8-3.3-1.8c-1.8,0-2.8,1.2-3.3,1.8c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1-0.1-0.2-0.2-0.3-0.3
                                   c-0.1-0.2-0.3-0.4-0.5-0.6l5.7-9.9l3.8,6.6c0.6,1,1.8,1.3,2.7,0.7c1-0.6,1.3-1.8,0.7-2.7L25,13.2c-0.4-0.6-1-1-1.7-1
                                   s-1.4,0.4-1.7,1l-8.4,14.5c-0.1,0.1-0.2,0.3-0.3,0.4L1.2,48.5c0,0,0,0.1,0,0.1c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2
                                   c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2C1,50,1,50,1,50.1
                                   c0,0.1,0,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1
                                   c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.3,0.1,0.5,0.1c0,0,0,0,0,0
                                   c0,0,0,0,0,0c0,0,0,0,0,0H14.7z"/>
                               <path d="M40.7,12.3h3.1l-2.2,2.2c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l2.2-2.2v3.1
                                   c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-3.1l2.2,2.2c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2h3.1
                                   c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5h-3.1l2.2-2.2c0.6-0.6,0.6-1.5,0-2.1c-0.6-0.6-1.5-0.6-2.1,0L49,7.2V4
                                   c0-0.8-0.7-1.5-1.5-1.5S46,3.2,46,4v3.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0c-0.6,0.6-0.6,1.5,0,2.1l2.2,2.2h-3.1
                                   c-0.8,0-1.5,0.7-1.5,1.5S39.9,12.3,40.7,12.3z"/>
                           </g>
                           </svg>
                                           <h2 class="card-front__heading">
                                               deuxiement
                                           </h2>
                                           <p class="card-front__text-price">
                                              Consultation
                                           </p>
                            </div>
                            
                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--ski">
                                   voir
                                </p>
                            </div>
                        </div>

                        <div class="card-back">
                           
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                   
                        <p class="inside-page__text">
                           "Parcourez notre sélection variée de terrains et découvrez les détails de chaque offre disponible."
                        </p>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Beach -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--beach">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                           <path d="M57.2,28h-7.4c-0.4-4-2-7.7-4.4-10.6l3.2-3.2c0.8-0.8,0.8-2,0-2.8c-0.8-0.8-2-0.8-2.8,0l-3.2,3.2c-3-2.4-6.6-4-10.6-4.4V2.8
                               c0-1.1-0.9-2-2-2s-2,0.9-2,2v7.4c-4,0.4-7.7,2-10.6,4.4l-3.2-3.2c-0.8-0.8-2-0.8-2.8,0c-0.8,0.8-0.8,2,0,2.8l3.2,3.2
                               c-2.4,3-4,6.6-4.4,10.6H2.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h7.4c0.4,4,2,7.7,4.4,10.6l-3.2,3.2c-0.8,0.8-0.8,2,0,2.8
                               c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6l3.2-3.2c3,2.4,6.6,4,10.6,4.4v7.4c0,1.1,0.9,2,2,2s2-0.9,2-2v-7.4c4-0.4,7.7-2,10.6-4.4
                               l3.2,3.2c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6c0.8-0.8,0.8-2,0-2.8l-3.2-3.2c2.4-3,4-6.6,4.4-10.6h7.4c1.1,0,2-0.9,2-2
                               S58.3,28,57.2,28z M30,45.9c-8.8,0-15.9-7.2-15.9-15.9c0-8.8,7.2-15.9,15.9-15.9c8.8,0,15.9,7.2,15.9,15.9
                               C45.9,38.8,38.8,45.9,30,45.9z"/>
                           </svg>
                            


                           
                                           <h2 class="card-front__heading">
                                           troisiement
                                           </h2>
                                           <p class="card-front__text-price">
                                               Prendre rendez-vous
                                           </p>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--beach">
                                   voir
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                          
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                      
                        <p class="inside-page__text">
                            "Planifiez votre visite en ligne en choisissant le terrain qui vous intéresse ".
                        </p>
                       
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Camping -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--camping">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">
                           <path d="M57,52.1c0-0.4-0.1-0.7-0.3-1.1l-6.3-10.8L32.4,9l2.3-4c0.6-1,0.2-2.2-0.7-2.7c-1-0.6-2.2-0.2-2.7,0.7L30,5.2L28.7,3
                               c-0.6-1-1.8-1.3-2.7-0.7c-1,0.6-1.3,1.8-0.7,2.7l2.3,4l-18,31.1L3.3,51C3.1,51.3,3,51.7,3,52.1c0,0.4,0.1,0.7,0.3,1
                               c0.4,0.6,1,1,1.7,1h50c0.7,0,1.4-0.4,1.7-1C56.9,52.8,57,52.4,57,52.1z M34.7,49.8C34.2,50,32.1,50,30,50s-4.2,0-4.7-0.2
                               c-0.2-0.5-0.2-2.1-0.2-3.6l0-4.3c0-2.7,2.2-4.9,4.9-4.9s4.9,2.2,4.9,4.9l0,4.3C34.9,47.7,34.9,49.3,34.7,49.8z M13.1,42.1L28,16.5
                               v16.7c-3.9,0.9-6.9,4.4-6.9,8.6l0,4.3c0,1.7,0,2.9,0.2,4H8.5L13.1,42.1z M38.7,50.1c0.2-1,0.2-2.3,0.2-4l0-4.3
                               c0-4.2-2.9-7.7-6.9-8.6V16.5l15,25.7l4.6,7.9H38.7z"/>
                           </svg>
                                           <h2 class="card-front__heading">
                                               quatriement
                                           </h2>
                                           <p class="card-front__text-price">
                                           Fin de vente 
                                           </p>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--camping">
                                  voir
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                           
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                       
                        <p class="inside-page__text">
                        "Finalisez votre achat en toute tranquillité avec l'assistance de notre équipe dévouée et professionnelle."
                        </p>
                       
                    </div>
                </div>
            </div>
        </section>
    </section>
   
      </footer>
</main>















<!-- testimonial -->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam temporibus quaerat ea, porro illum repudiandae laboriosam deserunt impedit exercitationem a.</p>
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <img src="https://i.ibb.co/0qwDj5M/user-1.png">
                 <h3>Boutabia Ahlem</h3>
            </div>

            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam temporibus quaerat ea, porro illum repudiandae laboriosam deserunt impedit exercitationem a.</p>
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <img src="https://i.ibb.co/t2JC2Q5/user-2.png">
                 <h3>Akrem Bt</h3>
            </div>

            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam temporibus quaerat ea, porro illum repudiandae laboriosam deserunt impedit exercitationem a.</p>
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <img src="https://i.ibb.co/09jHpyD/user-3.png">
                 <h3>Sahli Rawan</h3>
            </div>
        </div>
    </div>
</div>
<!-- bands -->
<!-- SOCIAL PANEL HTML -->
<div class="social-panel-container">
	<div class="social-panel">
		<p>Cree avec <i class="fa fa-heart"></i> par
			<a target="_blank" href="acceuil.php">venta team</a></p>
		<button class="close-btn"><i class="fas fa-times"></i></button>
		<h4>Get in touch on</h4>
		<ul>
			<li>
				<a href="" target="_blank">
        <i class="fab fa-github"></i>
				</a>
			</li>
			<li>
				<a href="" target="_blank">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="" target="_blank">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
			<li>
				<a href="" target="_blank">
        <i class="fab fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="" target="_blank">
        <i class="fab fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>
</div>
<button class="floating-btn">
	Get in Touch
</button>

   <script> const floating_btn = document.querySelector('.floating-btn');
    const close_btn = document.querySelector('.close-btn');
    const social_panel_container = document.querySelector('.social-panel-container');
    
    floating_btn.addEventListener('click', () => {
        social_panel_container.classList.toggle('visible')
    });
    
    close_btn.addEventListener('click', () => {
        social_panel_container.classList.remove('visible')
    });  </script>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
              <h3>Vous voulez peut-être faire un tour chez nous ? </h3>
              <p>Adresse:cite 1000LOG A COTE DE BOUKHARI SKIKDA</p>
              
            </div>
            <div class="footer-col-2">
                  <div class="logo-wrap">
                    <a href="acceuil.html" class="hover-target"><span>Ven</span>Ta</a>
                </div>
                <p>
                   
                    
                    "Trouvez votre terrain idéal avec venta ! Large choix, informations détaillées, recherche facile, assistance experte et sécurité garantie. Faites de vos projets immobiliers une réalité dès aujourd'hui !"</p>
              </div>
              <div class="footer-col-3">
                <h3>contacter nous</h3>
                <ul>
                    <li>+213 666 56 89 89</li>
                    <li>RWNAHLUMA@gmail.com</li>
                    
                </ul>
              </div>
              <div class="footer-col-4">
                <h3>suivi nous</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Youtube</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                </ul>
              </div>
        </div>
        <hr>
        <p class="copyright">&copy; Copy right -rawane Sahli</p>
    </div>
</div>
<!-- Responsive part -->
<script>
    var Menuitems = document.getElementById("Menuitems");
    Menuitems.style.maxHeight= "0px";
    function menutoggle(){
        if(Menuitems.style.maxHeight= "0px")
        {
            Menuitems.style.maxHeight= "200px";
        }
        else{
            Menuitems.style.maxHeight= "0px";
        }
    }



 



</script>








</body>
</html>
<?php }?>