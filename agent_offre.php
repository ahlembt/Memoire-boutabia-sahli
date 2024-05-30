<?php 
if (!isset($_SESSION)) {
  session_start();
}

require('connexion.php');

if (!$_SESSION['mdp']) {
  header('Location:Login.php');
  # code...
}
  else {


$Ofr=$access->prepare('SELECT * FROM formul WHERE status_offre=2');
$executeOK=$Ofr->execute();
$formul=$Ofr->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>listes des offres</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    /* nav bar */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

    	body{
    background: #f5f5f5;
    margin-top:20px;
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
    <h1 class="titre">Liste des offres</h1>
<div class="col-12 mb-3 mb-lg-5">
<div class="overflow-hidden card table-nowrap table-card">
<div class="card-header d-flex justify-content-between align-items-center">
<h5 class="mb-0">

  Voici la liste des offre proposer :</h5>

</div>
          
<div class="table-responsive" style="height:300px">
    <table class="table mb-0">
   
        <thead class="small text-uppercase bg-body text-muted">
            <tr>
            <th>id</th>
                <th>numero du terrain</th>
                <th>titre</th>
                <th>description</th>
                <th>wilaya</th>
                <th class="text-end">operation</th>
                
            </tr>
  
        </thead>
        <tbody>
            <?php
            foreach ($formul as $row) {
                // Assigning values from the array to variables
                $id= $row['id'];
                $imageee =base64_encode($row['image']);
                $num_terrain = $row['num_terrain'];
                $titre = $row['titre'];
                $description = $row['description'];
                $wilaya = $row['wilaya'];
                $statusOfr=$row['status_offre'];
                
                // Echoing the HTML with the correct variables
                echo '<tr class="align-middle">';
                echo '<td><span>' . $id . '</span></td>';
                echo '<td>';
        
                echo '<div class="d-flex align-items-center">';

                echo '<div class="h6 mb-0 lh-1">' . $num_terrain . '</div>';
                echo '</div>';
                echo '</td>';
                echo '<td><span>' . $titre . '</span></td>';
                echo '<td><span>' . $description . '</span></td>';
                echo '<td>' . $wilaya . '</td>';
                echo '<td class="text-end">';
                echo '<div class="dropdown">';
                echo '<a data-bs-toggle="dropdown" href="#" class="btn p-1" aria-expanded="false">';
                echo '<i class="fa fa-bars" aria-hidden="true"></i>';
                echo '</a>';
                echo '<div class="dropdown-menu dropdown-menu-end">';
              
                echo '<a href="confirmee.php?id=' . $id . '&status_offre=1" class="dropdown-item">Confirmee</a>';

                echo '<a href="confirmee.php?id=' . $id . '&status_offre=0" class="dropdown-item">Annuler</a>';

               
                echo '</div>';
                echo '</div>';
                echo '</td>';
               
                echo '</tr>';
              
               }

            ?> 
        </tbody>
    </table> 
</div>




<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>

<script>
    function Confirme(){
        alert("Rendez-vous confirmee")
    }
    function Delete(){
        alert("Rendez-vous annule")
    }
    
</script>
</body>
</html><?php } ?>