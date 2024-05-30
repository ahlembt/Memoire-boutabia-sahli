

<?php
 
 if (!isset($_SESSION)) {
  session_start();
}
require('connexion.php');
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
?><?php


    if (!isset($_SESSION['auth'])) {
      header('Location:Login.php');}
      else{
        $nom_user = $_SESSION['name'];
        $prenom_user = $_SESSION['lastname'];
        $id_auteur = $_SESSION['id_user'];
      
      
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Details de l'offre
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    /* nav */
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
/* end nav */
    	body{margin-top:100px;
background:#FAE7C9;
}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
}

.panel-heading {
    border-color:#eff2f7 ;
    font-size: 16px;
    font-weight: 300;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}

/*product list*/

.prod-cat li a{
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #C8AE7D;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img{
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}
.adtocart {
    background: #C8AE7D;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i{
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color:#C8AE7D ;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}
.product_meta a, .pro-price{
    color:#C8AE7D;
}

.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
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
/* btn status  */
.status {
  border-radius: 4px;
  display: flex;

  align-items: center;
  padding: 4px 8px;
  font-size: 18px;
}

.status:before {
 
  width: 4px;
  height: 10px;
  border-radius: 50%;
  margin-right: 4px;
}

.status.active {
  color: #2ba972;
  background-color: rgba(43, 169, 114, 0.2);
}

.status.active:before {
  background-color: #2ba972;
}

.status.disabled {
  color: #ff4d4d; /* Rouge */
  background-color: rgba(255, 77, 77, 0.2); 
}

.status.disabled:before {
  background-color: #ff4d4d; 
}
.status.attente {
  color: #ffcc00; /* Jaune */
  background-color: rgba(255, 204, 0, 0.2); /* Jaune avec 20% d'opacité */
}

.status.attente:before {
  background-color:  #ffcc00; 
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
      <!-- end nav -->
      
      <?php foreach ($result as $row) { ?>
       
     
        
      
            <div class="container bootdey">
                <div class="col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="pro-img-details">
                                    <?php
                                        if (!empty($row['image'])) {
                                            $imageData = $row['image'];
                                            $imageBase64 = base64_encode($imageData);
                                            echo '<img src="data:image/jpeg;base64,' . $imageBase64 . '" alt="product">';
                                        } else {
                                            echo '<img src="https://www.bootdey.com/image/550x380/FFB6C1/000000" alt="product">';
                                        }
                                    ?>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <h4 class="pro-d-title">
                                   
                                        <?php echo htmlspecialchars($row['titre']); ?>
                                   
                                </h4>
                                <p>
                               <?php echo nl2br(htmlspecialchars($row['description'])); ?>
                                </p>
                                <div class="product_meta">
                                    <span class="posted_in"><strong>Wilaya:</strong> <?php echo htmlspecialchars($row['wilaya']); ?></span>
                                    <span class="posted_in"><strong>Commune:</strong> <?php echo htmlspecialchars($row['comune']); ?></span>
                                    <span class="tagged_as"><strong>Surface:</strong> <?php echo htmlspecialchars($row['surface']); ?> m²</span>
                                   
                                   <?php if($row["status_vente"]==0){
    echo '<span class="status active"><strong>Etat:</strong> En vente</span>';
    }else if($row["status_vente"]==1){
     echo '<span class="status disabled"><strong>etat:</strong> Vendu </span>';
    }?>
                                    
                                </div>
                                <div class="m-bot15"> 
                                    <strong>Prix:</strong> <span ><?php echo htmlspecialchars($row['prix']); ?></span> DZD<br>
                                    <strong>Date de Publication:</strong> <span style="color:green;"><?php echo htmlspecialchars($row['date_offre']); ?></span> 
                                </div>
                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i><a href="rendezvous.php?id=<?php echo $row['id']; ?>"> Prendre un Rendez-vous</a></button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <?php }; ?>
    </main>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // JS script if needed
    </script>
</body>
</html>
<?php } ?>