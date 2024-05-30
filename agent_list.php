<?php
if (!isset($_SESSION)) {
  session_start();
}
if (!$_SESSION['mdp']) {
  header('Location:Login.php');
  # code...
}
  else {
?>
<?php require('agentcode.php'); ?>
<?php require('connexion.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
<style >
    /* nav bar */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    


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
  top: 0px;
  background: #65451F;
}
nav .wrapper{
  margin-top: 0px;
  position: relative;
  max-width: 1300px;
  padding: 0px 30px;
  padding-top: 0%;
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
  margin-top: 0px;
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
/* list */
    	body{margin-top:20px;
background:#FAE7C9;
}

.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.avatar.sm {
    width: 2.25rem;
    height: 2.25rem;
    font-size: .818125rem;
}
.table-nowrap .table td, .table-nowrap .table th {
    white-space: nowrap;
}
.table>:not(caption)>*>* {
    padding: 0.75rem 1.25rem;
    border-bottom-width: 1px;
}
table th {
    font-weight: 600;
    background-color: #eeecfd !important;
}
.row{
    
    margin-top: 100px;
}
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
 
  width: 2px;
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
    <!-- nav -->
   
    <nav>
        <div class="wrapper">
            <div class="logo-wrap">
                <a href="#" class="hover-target"><span>Ven</span>Ta</a>
            </div>
          <input type="radio" name="slider" id="menu-btn">
          <input type="radio" name="slider" id="close-btn">
          <ul class="nav-links" style="margin-bottom:0px">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            <li><a href="accagent.php">Acceuil</a></li>
            <li><a href="">Espace agent</a>
                <ul class="drop-menu">
                    
                    <li><a href="agent_list.php" >listes des rendez-vous</a></li>
                    <li><a href="agent_offre.php">listes des offres </a></li>

                  </ul></li>
           
           
            <li> <a href="deconnexion.php" class="desktop-item">Deconnexion</a>
            <input type="checkbox" id="showDrop">
            <label for="showDrop" class="mobile-item">Profil</label>
            
              
            </li>
          </ul>
          <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
      </nav>
<!-- end nav -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container">
    <div class="row">
        <h1 class="titre">Liste des Rendez-vous</h1>
        <div class="col-12 mb-3 mb-lg-5" style="margin-left:-60px; ">
            <div class="overflow-hidden card table-nowrap table-card" style="width:1200px; ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Les nouveaux rendez-vous</h5>
                </div>
                <div class="table-responsive" width="300px">
                    <table class="table mb-0" >
                        <thead class="small text-uppercase bg-body text-muted">
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Wilayas</th>
                                <th>Reference</th>
                                <th>Date de Rendez-vous</th>
                                <th>Message d'utilisateur</th>
                                <th>status</th>
                                <th class="text-end"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($datacnx as $row) { 
                                $nom_user = $row['nom_rdv'];
                                $prenom_rdv = $row['prenom_rdv'];
                                $emailrdv = $row['email_rdv'];
                                $wilaya = $row['wilaya_rdv'];
                                $ref = $row['ref_rdv'];
                                $daterdv = $row['date'];
                                $msgrdv = $row['message'];
                                $status= $row['status'];
                                $id_rdv= $row['id_rdv'];
?>
                               
                                <tr class="align-middle">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="h6 mb-0 lh-1"><?php echo $nom_user . ' ' . $prenom_rdv; ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span><?php echo $emailrdv; ?></span></td>
                                    <td><span class="d-inline-block align-middle"><?php echo $wilaya; ?></span></td>
                                    <td><span><?php echo $ref; ?></span></td>
                                    <td><?php echo $daterdv; ?></td>
                                    <td><?php echo $msgrdv; ?></td>
                                    <td>
                                    <?php 
                                    if($row["status"]==1){
                                      echo '<p class="status active" style="margin: left 0px;">confirmee</p>';
                                    }else if($row["status"]==0){
                                      echo '<p class="status disabled">annuler</p>';
                                    }else {
                                      echo '<p class="status attente">en attente</p>';
                                    }
                            
                                   ?></td>
                                   
                                    <td class="text-end" style="padding-right:5px">
                                    <?php 
                                    echo '<div class="dropdown">';
                                         echo '<a data-bs-toggle="dropdown" href="#" class="btn p-1" aria-expanded="false">';
                                      echo '<i class="fa fa-bars" aria-hidden="true"></i>';
                                        echo '</a>';
                                        echo '<div class="dropdown-menu dropdown-menu-end">';
                                        
                                        echo '<a href="active.php?id_rdv=' . $id_rdv . '&status=1" class="dropdown-item">Confirmee</a>';
                                        
                                        echo '<a href="active.php?id_rdv=' . $id_rdv . '&status=0" class="dropdown-item">Annuler</a>';

               
                                            echo '</div>';
                                           echo '</div>';?>
                                    
                                   
                                      </td>


                                    
                                    
                                   
                                </tr>
                                <?php
                                }
                                ?>
                                
                          
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="sweetalert.min.js"></script>
</body>
</html>
<?php } ?>