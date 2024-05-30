<?php 
if (!isset($_SESSION)) {
  session_start();
}

require('connexion.php'); ?>


<?php require('parametrecode.php'); ?>
<?php require('changemdp.php'); ?>

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


<title>account settings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">


<style type="text/css">
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
/* card profil */
.ui-w-80 {
    width: 80px !important;
    height: auto;
}

.btn-default {
    border-color: rgba(24,28,33,0.1);
    background: rgba(0,0,0,0);
    color: #4E5155;
}

label.btn {
    margin-bottom: 0;
}

.btn-outline-primary {
    border-color: #26B4FF;
    background: transparent;
    color: #26B4FF;
}

.btn {
    cursor: pointer;
}

.text-light {
    color: #babbbc !important;
}

.btn-facebook {
    border-color: rgba(0,0,0,0);
    background: #3B5998;
    color: #fff;
}

.btn-instagram {
    border-color: rgba(0,0,0,0);
    background: #000;
    color: #fff;
}

.card {
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24,28,33,0.012);
}

.row-bordered {
    overflow: hidden;
}

.account-settings-fileinput {
    position: absolute;
    visibility: hidden;
    width: 1px;
    height: 1px;
    opacity: 0;
}
.account-settings-links .list-group-item.active {
    font-weight: bold !important;
}
html:not(.dark-style) .account-settings-links .list-group-item.active {
    background: transparent !important;
}
.account-settings-multiselect ~ .select2-container {
    width: 100% !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}
.material-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.material-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}
.dark-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(255, 255, 255, 0.03) !important;
}
.dark-style .account-settings-links .list-group-item.active {
    color: #fff !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #4E5155 !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24,28,33,0.03) !important;
}
.flex-grow-1{
   margin-top: 100px;
    padding-bottom: 50px;
}

/* offre publiee */
.titre{
    font-size: 30px;
    color: black;
    font-weight: 700!important;
    margin-top: 50px;
    margin-bottom: 50px;
    
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

      <!-- profil edit -->















<?php if(isset($_GET['errorMsg'])) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_GET['errorMsg']; ?>
    </div>
<?php } ?>
      
<div class="container light-style flex-grow-1 container-p-y">
<h4 class="titre">
Parametres du Compte
</h4>

<div class="card overflow-hidden">
<div class="row no-gutters row-bordered row-border-light">
<div class="col-md-3 pt-0">
<div class="list-group list-group-flush account-settings-links">
<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Generale</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Changer de mot de passe</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Mes terrains</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-rdv">Mes rendez vous</a>
</div>
</div>

<div class="col-md-9">
<div class="tab-content">

  <!-- mes information  -->
<div class="tab-pane fade active show" id="account-general">
<?php if(isset($errorMsg)){echo'<p>'.$errorMsg.'<p>';} ?>
<form method="post" enctype="multipart/form-data">

      <div class="card-body media align-items-center">
          
          <?php
          if (!empty($photo)) {
               echo ' <img class="d-block ui-w-80"src="data:image/jpeg;base64,'.base64_encode($photo).'"alt="">';
          } else {
             echo ' <img class="d-block ui-w-80" src="default.jpg" alt="">';
          }
          ?> 
          <div class="media-body ml-4">
          <form methode="post" enctype="multipart/form-data">
              <label class="btn btn-outline-primary">
                  Ajouter une nouvelle photo
                  <input type="file" name="photo_user" class="account-settings-fileinput">
              </label> &nbsp;
              <button type="submit" name="Réinitialiser" class="btn btn-default md-btn-flat">Réinitialiser</button>
          </div>
      </div></form>
      <hr class="border-light m-0">
      <div class="card-body">
      <form method="post" >
    <div class="form-group">
        <label class="form-label">Nom utilisateur</label>
        <input type="text" name="pseudo" class="form-control mb-1" value="<?php echo $pseudo; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Prénom</label>
        <input type="text" name="prenom" class="form-control mb-1" value="<?php echo $prenom; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">E-mail</label>
        <input type="email" name="email_user" class="form-control mb-1" value="<?php echo $email; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Date de naissance</label>
        <input type="text" name="dna_user" class="form-control" value="<?php echo $DNA; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Adresse de naissance</label>
        <input type="text" name="dna_adresse" class="form-control" value="<?php echo $adresseDNA; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Sexe</label>
        <input type="text" name="sexe" class="form-control" value="<?php echo $sex; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Numéro de téléphone</label>
        <input type="text"  name="tel_user" class="form-control" value="<?php echo $tel; ?>">
    </div>
    <div class="form-group">
        <label class="form-label">Adresse</label>
        <input type="text" name="adresse_user" class="form-control" value="<?php echo $adresse; ?>">
    </div>
   <div class="text-right mt-3" style="margin-top:30px;margin-bottom:16px; margin-right:10px; ">
        <button type="submit" name="Modifier" class="btn btn-primary">Changer Mes informations</button>&nbsp;
        <button type="submit"  class="btn btn-default">Annuler</button>
    </div>
</form>

        </div>   
</div>
<!-- changement de mot de passe -->

<div class="tab-pane fade" id="account-change-password">
<div class="card-body pb-2">

  <form method="post" action="changemdp.php">

 <div class="form-group">
<label class="form-label">Mot de passe actuel</label>
<input type="password" class="form-control" name="old_pass">
</div>
<div class="form-group">
<label class="form-label">Nouveau mot de passe</label>
<input type="password" class="form-control" name="new_pass">
</div>
<div class="form-group">
<label class="form-label">Repetez le nouveau mot de passe</label>
<input type="password" class="form-control" name="confirm_pass">
</div>

<div class="text-right mt-3"style="
margin-top:30px;margin-bottom:16px; margin-right:10px; ">
<button type="submit" name="change" class="btn btn-primary">Changer le mot de passe</button>&nbsp;
</form>
</div>
</div>
</div>
<!-- mes rendez vous  -->
<div class="tab-pane fade" id="account-rdv">
<div class="card-body pb-2">
<div class="table-responsive">
<table class="table">
  <thead class="table-dark">
    <tr>
                                    <th>Date de rendez-vous</th>
                                    <th>Ref de terrain</th>
                                    <th>Wilayas</th>
                                    <th>message</th>
                                    <th>Etat de rendez vous</th>
                                    
                                   
                                </tr>
  </thead>
  <tbody>
  <?php while ($row = $Rendez->fetch()) {
                              $date = $row['date'];
    $ref = $row['ref_rdv'];
    $Wilaya = $row['wilaya_rdv'];
    $message=$row['message'];
    $status = $row['status'];
    
    ?>
    <tr class="align-middle">
    <td><?= $date;?></td>
    <td><?= $ref;?></td>
    <td><?= $Wilaya;?></td>
    <td><?= $message;?></td>

    <td class="text-end" style="padding-right:50px">
    <?php if ($row["status"] == 1) { ?>
    <p class="status active">Confirme</p>
<?php } elseif ($row["status"] == 0) { ?>
    <p class="status disabled">Annuler</p>
<?php } else { ?>
    <p class="status attente">En attente</p>
<?php } ?>
                                    
                                      </td>
    <?php
  }?></tr>
  </tbody>
</table>
                      
</div>
</div>
</div>
<!-- offre -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="tab-pane fade" id="account-connections">
<div class="card-body pb-2">
                  
                    <div class="table-responsive"style="height:300px">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Titre</th>
                                    <th>Surface</th>
                                    <th>Wilayas</th>
                                    <th>Prix</th>
                                    <th>Date de creation</th>
                                    <th> traitement </th>
                                    <th class="text-end">opreration</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php while ($row = $Terrain->fetch()) {
                              $Titre = $row['titre'];
    $Surface = $row['surface'];
    $Wilaya = $row['wilaya'];
    $prix = $row['prix'];
    $date = $row['date_offre'];
    $id=$row['id'];
    $id_user=$row['id_user'];
    $status_vente=$row['status_vente'];
                             

 
 
   
    echo '<tr class="align-middle">';
    echo '<td>' . $Titre . '</td>';
    echo '<td>' . $Surface . '</td>';
    echo '<td>' . $Wilaya . '</td>';
    echo '<td>' . $prix . ' DA</td>';
    echo '<td>' . $date . '</td>';
    echo '<td>';
    
    if($row["status_vente"]==0){
    echo '<p class="status active" style="margin: left 0px;">En cours</p>';
    }else if($row["status_vente"]==1){
     echo '<p class="status disabled">Vendu</p>';
    }
      echo ' </td>';
    echo '<td class="text-end">';
    echo '<div class="dropdown">';
    echo '<a data-bs-toggle="dropdown" href="#" class="btn p-1" aria-expanded="false">';
    echo '<i class="fa fa-bars" aria-hidden="true"></i>';
      echo '</a>';
      echo '<div class="dropdown-menu dropdown-menu-end">';
      
      echo '<a href="vendu.php?id=' . $id . '&status_vente=1" class="dropdown-item">Marque comme vendu</a>';
      
    echo '<a href="supp.php?id=' . $id . '&status_offre=0" class="dropdown-item" onclick="deleteItem()">Supprimer</a>';
   


          echo '</div>';
    
    echo '</div>';
    echo '</td>';
    echo '</tr>';
                             }?>    

                                <!-- Add more table rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            
        </script>
</div>
<!-- end offre -->

</div>
</div>
</div>
</div>
</div>


<!-- la place des btn -->

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
<script>

function deleteItem() {
    // Add your delete logic here
    alert("L'offre est supprimer  !"); // Example: Show an alert
}
function Saved() {
    // Add your delete logic here
    alert("votre modifications sont enregistrer!"); // Example: Show an alert
}


</script>
</body>
</html>
   <?php
    }?>