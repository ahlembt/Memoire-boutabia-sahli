<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/8fe048c345.js" crossorigin="anonymous"></script>
    <title>a propos Acceuil</title>
  </head>
 



  <style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


* logo css */

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

body {
  margin: 0; 
  font-family: font-family: 'Montserrat', sans-serif;
  font-size: 1.5rem;
  background-color: black;
  color: #fff;
}

/*====== typography ======*/
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
h1 {
   font-weight: 700;
   color: #fff;
   font-size: 1.75rem;
}

h2 {
   font-weight: 700;
   color: #000;
   font-size: 1.75rem;
}

.intro {
  font-size: 1.15rem;
  margin-bottom: 2.5em;
}

span {
   color: #fda039;
}

.black {
  font-weight: 700;
  color: #000;
}

/*==== main-grid Layout ====*/

.main-grid {
    display: grid;
    grid-template-columns: minmax(1em, 1fr) minmax(0px, 500px) minmax(1em, 1fr);
    grid-column-gap: 2em;
}

/* ==== Layout ====*/

.header {
  background: #000;
}

.header-content{
  display: flex;
  flex-direction: row;
  grid-column: 2 / -2;
}

.logo {
  background: #fda039;
  color: #000;
  font-weight: 700;
  padding: 1em .5em;
  margin-top: 0;
  margin-bottom: 0;
  font-size: 1.25rem;
}

.navigation {
  position: fixed;
  background: #000;
  width: 100%;
  top: 0;
  right: 0;
  bottom: 0;
  left: 100%;
  transform: translateX(0);
  transition: transform 250ms;
}

.nav-list {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-direction: column;
  list-style: none;
  margin: 0;
  padding: 0;
  height: 100%;
  font-size: 3rem;
}

.nav-link {
  text-decoration: none;
  color: #fda039;
}

.nav-link:hover,
.nav-link:focus,
.close-nav:hover,
.close-nav:focus,
.open-nav:hover,
.open-nav:focus {
  color: #fff;
  cursor: pointer;
}

.open-nav {
  border: 0;
  background: 0;
  color: #fff;
  padding: .5em;
  margin-left: auto;
  font-size: 1em;
}

.navigation-open {
  transform: translateX(-100%);
}

.close-nav {
    border: 0;
    background: 0;
    color: #fda039;
    font-weight: 700;
    font-size: 3rem;
    padding: .5em;
    position: absolute;
}

.current {
  border-bottom: 1px solid #fda039;
}

main {
  background-color: #fff;
  color: #000;
  grid-column: 2 /-2;
}

  .head {
  grid-column: 2 / -2;
  text-align: center;
  margin-top: 3em;
  margin-bottom: 3em;
}

.page-title {
  color: #000;
  font-size: 2.5rem;
  justify-self: center;
}

.main-image {
  grid-column: 2 / -2;
  object-fit: cover;
  max-width: 100%;
  display: block;
  box-shadow: 10px 10px 250px #000;
}

.main-text {
  grid-column: 2 / -2;
  margin-top: 3em;
  margin-bottom: 3em;
}

.section-title::after {
  content: "";
  display: block;
  width: 100px;
  height: 3px;
  margin-top: 1em;
  background: #fda039;
  margin-left: auto;
  margin-right: auto;
}

.sub {
  margin-top: 3em;
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
  @media (min-width: 600px) {
      .main-grid {
        grid-template-columns: minmax(1em, 1fr) repeat(3, minmax(20px, 320px)) minmax(1em, 1fr);
    }
    
    .open-nav,
    .close-nav {
      display: none;
    }
    
    .navigation {
      position: initial;
    }
    
    .nav-list {
      flex-direction: row;
      justify-content: flex-start;
    }
    
    .nav-link {
      margin-left: 1em;
      font-size: 1.7rem;
    }
    
    .logo {
      padding: .5em 1em;
      text-align: center;
    }
    
    .head {
      grid-column: 3 / -3;
    }
    
.page-title::after {
    content: '';
    display: block;
    width: 100%;
    height: 5px;
    background: #fda039;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
}
    
    .main-image {
      grid-column: 2;
      margin-top: 1.3em;
  
    }
    
    .main-text {
      grid-column: 3 / span 2;
      margin-top: 0;
    }
    
    .section-title::after {
  margin-left: 0;
}
    
    
    
    .footer {
      padding-top: 2em;
      padding-bottom: 2em;
    }
    
    .footer-text {
      grid-column: 2 / span 2;
    }
    
    .social {
      grid-column: span1;
    }
    
    .icon {
      margin: .5em;
    }
    
    .footer-text {
      width: 50vw;
      margin-left: 0;
      order: -1;
    }
    
    .end,
    .copyright {
      text-align: start;
    }
  }

@media(min-width: 700px) {
  .page-title::after {
    content: '';
    display: block;
    width: 160px;
    height: 5px;
    background: #fda039;
    margin-right: auto;
    margin-left: auto;
    margin-top: 10px;
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
                <li><a href="acceuil.php">Acceuil</a></li>
               
        
                   <li>    
                  <a href="aboutus.php" class="desktop-item">a propos</a>
                  </li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="terme.php">terme et Conditions</a></li>
                    <li><a href="Login.php">Se Connecter</a></li>
                  
                  <input type="checkbox" id="showMega">
                  <label for="showMega" class="mobile-item">Mega Menu</label>
                  
                
               
              </ul>
              <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
          </nav>
          <header class="header main-grid">
      

      </header>
      <main class="main-grid">
              <div class="head">
              <h1 class="page-title">A propos Nous</h1>
              <p class="subtitle">Bienvenue sur Venta, votre partenaire de confiance dans l'acquisition de terrains pour vos projets immobiliers. Depuis notre fondation, nous nous engageons à fournir des solutions de qualité supérieure pour répondre à vos besoins fonciers.</p>
              </div>
              <img class="main-image" src="https://i.pinimg.com/564x/06/a9/4c/06a94ca4b12d653a98ddcd39fa4e5501.jpg">
              
              <div class="main-text">
                  <h2 class="section-title">Notre equipe</h2>
                  <p> Notre équipe expérimentée est composée d'experts passionnés par l'immobilier et dévoués à fournir un service exceptionnel à nos clients. De la recherche de terrains appropriés à la gestion des transactions, chaque membre de notre équipe est déterminé à vous offrir une expérience fluide et agréable.</p>
                  
                
                  <h2 class="section-title sub">Nos services</h2>
                  <p>Vente de terrains résidentiels, commerciaux et industriels.
                      Assistance dans la recherche de terrains adaptés à vos besoins spécifiques.
                      Accompagnement tout au long du processus d'achat, y compris la négociation et la gestion des formalités administratives.
                      Conseils d'experts sur le développement immobilier et l'investissement foncier.</p>
                  
              </div>
        
      </main>
      
      <div class="footer">
      <div class="container">
          <div class="row">
              <div class="footer-col-1">
                <h3>Vous voulez peut-être faire un tour chez nous ? </h3>
                <p>Adresse:cite 1000LOG A COTE DE BOUKHARI SKIKDA</p>
                
              </div>
              <div class="footer-col-2">
                    <div class="logo-wrap">
                      <a href="acceuil2.php" class="hover-target"><span>Ven</span>Ta</a>
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
  
  <script>
      const closeButton = document.querySelector('.close-nav');
  const openButton = document.querySelector('.open-nav');
  const nav = document.querySelector('.navigation');
  
  closeButton.addEventListener("click", () => {
      nav.classList.remove('navigation-open');
  });
  
  openButton.addEventListener("click", () => {
      nav.classList.add('navigation-open');
  });
  </script>
  
  
  
  
    </body>
  </html>