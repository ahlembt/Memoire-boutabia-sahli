<?php 
 
 if (!isset($_SESSION)) {
  session_start();
}
require('codeafficher.php');
?>
<?php 
require('connexion.php');
?>
<?php


    if (!isset($_SESSION['auth'])) {
      header('Location:Login.php');}
      else {
        $nom_user = $_SESSION['name'];
        $prenom_user = $_SESSION['lastname'];
        $id_auteur = $_SESSION['id_user'];
    
     
?>


<!DOCTYPE html>
<html>
    <head>
        <html lang="en">

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="filtrepae.css">
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* logo css */

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

/* filtre
 =======================================================================================================*/
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');
 * {
   box-sizing: border-box;
 }
 :root {
   --app-bg:#FAE7C9;
   --sidebar: #65451F;
   --sidebar-main-color: #fff;
   --table-border:#65451F ;
   --table-header: #EAC696;
   --app-content-main-color: black;
   --btn-color:#fff;
   --sidebar-link: #fff;
   --sidebar-active-link: #EAC696;
   --sidebar-hover-link: #EAC696;
   --action-color: #65451F;
   --action-color-hover: #65451F;
   --app-content-secondary-color: #65451F;
   --filter-reset: #352303;
   --filter-shadow: rgba(16, 24, 39, 0.8) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
 }
 .light:root {
   --app-bg: #fff;
   --sidebar: #f3f6fd;
   --app-content-secondary-color: #f3f6fd;
   --app-content-main-color: #1f1c2e;
   --sidebar-link: #1f1c2e;
   --sidebar-hover-link: rgba(195, 207, 244, 0.5);
   --sidebar-active-link: #c3cff4;
   --sidebar-main-color: #1f1c2e;
   --filter-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
 }
 body, html {
   margin: 0;
   padding: 0;
   height: 100%;
   width: 100%;
 }
 body {
   overflow: hidden;
   font-family: 'Poppins', sans-serif;
   background-color: var(--app-bg);
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
 }
 .app-container {
   border-radius: 4px;
   width: 100%;
   height: 100%;
   max-height: 100%;
   max-width: 1280px;
   display: flex;
   overflow: hidden;
   box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
   max-width: 2000px;
   margin: 0 auto;
 }
 .sidebar {
   flex-basis: 200px;
   max-width: 200px;
   flex-shrink: 0;
   background-color: var(--sidebar);
   display: flex;
   flex-direction: column;
 }
 .sidebar-header {
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding: 16px;
 }
 .sidebar-list {
   list-style-type: none;
   padding: 0;
 }
 .sidebar-list-item {
   position: relative;
   margin-bottom: 4px;
 }
 .sidebar-list-item a {
   display: flex;
   align-items: center;
   width: 100%;
   padding: 10px 16px;
   color: var(--sidebar-link);
   text-decoration: none;
   font-size: 14px;
   line-height: 24px;
 }
 .sidebar-list-item svg {
   margin-right: 8px;
 }
 .sidebar-list-item:hover {
   background-color: var(--sidebar-hover-link);
 }
 .sidebar-list-item.active {
   background-color: var(--sidebar-active-link);
 }
 .sidebar-list-item.active:before {
   content: '';
   position: absolute;
   right: 0;
   background-color: var(--action-color);
   height: 100%;
   width: 4px;
 }
 @media screen and (max-width: 1024px) {
   .sidebar {
     display: none;
   }
 }

 
 .app-icon {
   color: var(--sidebar-main-color);
 }
 .app-icon svg {
   width: 24px;
   height: 24px;
 }
 .app-content {
   padding: 16px;
   background-color: var(--app-bg);
   height: 100%;
   flex: 1;
   max-height: 100%;
   display: flex;
   flex-direction: column;
 }
 .app-content-header {
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding: 0 4px;
 }
 .app-content-headerText {
   color: var(--btn-color);
   font-size: 24px;
   line-height: 32px;
   margin: 0;
 }
 .app-content-headerButton {
   background-color: var(--action-color);
   color: #fff;
   font-size: 14px;
   line-height: 24px;
   border: none;
   border-radius: 4px;
   height: 32px;
   padding: 0 16px;
   transition: 0.2s;
   cursor: pointer;
 }
 .app-content-headerButton:hover {
   background-color: var(--action-color-hover);
 }
 .app-content-actions {
   display: flex;
   justify-content: space-between;
   align-items: center;
   padding: 100px 4px;
  
 }
 .app-content-actions-wrapper {
   display: flex;
   align-items: center;
   margin-left: auto;
 }
 @media screen and (max-width: 520px) {
   .app-content-actions {
     flex-direction: column;
   }
   .app-content-actions .search-bar {
     max-width: 100%;
     order: 2;
   }
   .app-content-actions .app-content-actions-wrapper {
     padding-bottom: 16px;
     order: 1;
   }
 }
 .search-bar {
   background-color: #65451F;
   border: 1px solid #65451F;
   color: #fff;
   font-size: 14px;
   line-height: 24px;
   border-radius: 4px;
   padding: 0px 10px 0px 32px;
   height: 32px;
   background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
   background-size: 16px;
   background-repeat: no-repeat;
   background-position: left 10px center;
   width: 100%;
   max-width: 500px;
   transition: 0.2s;
 }
 .light .search-bar {
   background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%231f1c2e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
 }
 .search-bar:placeholder {
   color: var(--app-content-main-color);
 }
 .search-bar:hover {
   border-color: var(--action-color-hover);
   background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%236291fd' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
 }
 .search-bar:focus {
   outline: none;
   border-color: var(--action-color);
   background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%232869ff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
 }
 .action-button {
   border-radius: 4px;
   height: 32px;
   background-color: #65451F;
   border: 1px solid #65451F;
   display: flex;
   align-items: center;
   color: var(--btn-color);
   font-size: 20px;
   margin-left: 8px;
   
   cursor: pointer;
 }
 .action-button span {
   margin-right: 4px;
 }
 
 .action-button:focus, .action-button.active {
   outline: none;
   color: var(--action-color);
   border-color: var(--action-color);
 }
 .filter-button-wrapper {
   position: relative;
 }
 .filter-menu {
   background-color:#65451F;
   position: absolute;
   top: calc(100% + 16px);
   right: -74px;
   border-radius: 4px;
   padding: 8px;
   width: 220px;
   z-index: 2;
   box-shadow: var(--filter-shadow);
   visibility: hidden;
   opacity: 0;
   transition: 0.2s;
 }
 .filter-menu:before {
   content: '';
   position: absolute;
   width: 0;
   height: 0;
   border-left: 5px solid transparent;
   border-right: 5px solid transparent;
   border-bottom: 5px solid var(--app-content-secondary-color);
   bottom: 100%;
   left: 50%;
   transform: translatex(-50%);
 }
 .filter-menu.active {
   visibility: visible;
   opacity: 1;
   top: calc(100% + 8px);
 }
 .filter-menu label {
   display: block;
   font-size: 14px;
   color: var(--btn-color);
   margin-bottom: 8px;
 }
 .filter-menu select {
   appearance: none;
   background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
   background-repeat: no-repeat;
   padding: 8px 24px 8px 8px;
   background-position: right 4px center;
   border: 1px solid var(--btn-color);
   border-radius: 4px;
   color: var(--btn-color);
   font-size: 12px;
   background-color: transparent;
   margin-bottom: 16px;
   width: 100%;
 }
 .filter-menu select option {
   font-size: 14px;
 }
 .light .filter-menu select {
   background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%231f1c2e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
 }
 .filter-menu select:hover {
   border-color: var(--action-color-hover);
 }
 .filter-menu select:focus, .filter-menu select.active {
   outline: none;
   color: var(--action-color);
   border-color: var(--action-color);
   background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%232869ff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
 }
 .filter-menu-buttons {
   display: flex;
   align-items: center;
   justify-content: space-between;
 }
 .filter-button {
   border-radius: 2px;
   font-size: 12px;
   padding: 4px 8px;
   cursor: pointer;
   border: none;
   color: #fff;
 }
 .filter-button.apply {
   background-color: var(--action-color);
 }
 .filter-button.reset {
   background-color: var(--filter-reset);
 }
 .products-area-wrapper {
   width: 100%;
   max-height: 100%;
   overflow: auto;
   padding: 0 4px;
   background-attachment: fixed;
 }
 .tableView .products-header {
   display: flex;
   align-items: center;
   border-radius: 4px;
   background-color: #65451F;
   position: sticky;
   top: 0;
 }
 .tableView .products-row {
   display: flex;
   align-items: center;
   border-radius: 4px;
 }
 .tableView .products-row:hover {
   box-shadow: var(--filter-shadow);
   background-color: var(--app-content-secondary-color);
 }
 .tableView .products-row .cell-more-button {
   display: none;
 }
 .tableView .product-cell {
   flex: 1;
   padding: 8px 16px;
   color: var(--app-content-main-color);
   font-size: 14px;
   display: flex;
   align-items: center;
 }
 .tableView .product-cell img {
   width: 32px;
   height: 32px;
   border-radius: 6px;
   margin-right: 6px;
 }
 @media screen and (max-width: 780px) {
   .tableView .product-cell {
     font-size: 12px;
   }
   .tableView .product-cell.image span {
     display: none;
   }
   .tableView .product-cell.image {
     flex: 0.2;
   }
 }
 @media screen and (max-width: 520px) {
   .tableView .product-cell.category, .tableView .product-cell.sales {
     display: none;
   }
   .tableView .product-cell.status-cell {
     flex: 0.4;
   }
   .tableView .product-cell.stock, .tableView .product-cell.price {
     flex: 0.2;
   }
 }
 @media screen and (max-width: 480px) {
   .tableView .product-cell.stock {
     display: none;
   }
   .tableView .product-cell.price {
     flex: 0.4;
   }
 }
 .tableView .sort-button {
   padding: 0;
   background-color: transparent;
   border: none;
   cursor: pointer;
   color: var(--app-content-main-color);
   margin-left: 4px;
   display: flex;
   align-items: center;
 }
 
 .tableView .sort-button svg {
   width: 12px;
 }
 .tableView .cell-label {
   display: none;
 }
 .status {
   border-radius: 4px;
   display: flex;
   align-items: center;
   padding: 4px 8px;
   font-size: 12px;
 }
 .status:before {
   content: '';
   width: 4px;
   height: 4px;
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
   color: #59719d;
   background-color: rgba(89, 113, 157, 0.2);
 }
 .status.disabled:before {
   background-color: #59719d;
 }
 .gridView {
  height: max-content;
   display: flex;
   flex-wrap: wrap;
   margin: 0 -8px;
   top: 25%;

 }
 @media screen and (max-width: 520px) {
   .gridView {
     margin: 0;
   }
 }
 .gridView .products-header {
   display: none;
 }
 .gridView .products-row {
   margin: 8px;
   width: calc(25% - 16px);
   background-color: #65451F;
   padding: 8px;
   border-radius: 4px;
   cursor: pointer;
   transition: transform 0.2s;
   position: relative;
 }
 .gridView .products-row:hover {
   transform: scale(1.01);
   box-shadow: var(--filter-shadow);
 }
 .gridView .products-row:hover .cell-more-button {
   display: flex;
 }
 @media screen and (max-width: 1024px) {
   .gridView .products-row {
     width: calc(33.3% - 16px);
   }
 }
 @media screen and (max-width: 820px) {
   .gridView .products-row {
     width: calc(50% - 16px);
   }
 }
 @media screen and (max-width: 520px) {
   .gridView .products-row {
     width: 100%;
     margin: 8px 0;
   }
   .gridView .products-row:hover {
     transform: none;
   }
 }
 .gridView .products-row .cell-more-button {
   border: none;
   padding: 0;
   border-radius: 4px;
   position: absolute;
   top: 16px;
   right: 16px;
   z-index: 1;
   display: flex;
   align-items: center;
   justify-content: center;
   width: 24px;
   height: 24px;
   background-color: rgba(16, 24, 39, 0.7);
   color: #fff;
   cursor: pointer;
   display: none;
 }
 .gridView .product-cell {
   color: var(--btn-color);
   font-size: 14px;
   margin-bottom: 8px;
 }
 .gridView .product-cell:not(.image) {
   display: flex;
   align-items: center;
   justify-content: space-between;
 }
 .gridView .product-cell.image span {
   font-size: 18px;
   line-height: 24px;
 }
 .gridView .product-cell img {
   width: 100%;
   height: 140px;
   object-fit: cover;
   border-radius: 4px;
   margin-bottom: 16px;
 }
 .gridView .cell-label {
   opacity: 0.6;
 }
 
  
/* end============================================================================ *
/* price ====================*/

.price-input {
    width: 100%;
    display: flex;
    margin: 10px 0 15px;
  }
  .price-input .field {
    display: flex;
    font-size: 15px;
    width: 100%;
    height: 20px;
    align-items: center;
  }
  .field input {
    width: 100%;
    height: 100%;
    outline: none;
    font-size: 10px;
    margin-left: 5px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #999;
    border-radius: 2px;
    -moz-appearance: textfield;
  }
  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
  }
  input.input-max.field{
max-width: 100px;
  }
  .price-input .seperator {
    width: 130px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
  }
  /* Cards style ======================== */
  h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #7ac400;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 25px 15px;
	background: #fff;
	border-radius: 6px;
	text-align: center;
	position: relative;
	box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.carousel .item .img-box {
	height: 120px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}
.carousel .thumb-content .btn {
	color: #7ac400;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #7ac400;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #7ac400;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 40px;
	background: #7ac400;	
	margin: auto 0;
	border-radius: 4px;
	opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
	background: #78bf00;
	opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: #fff;
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -2px;
}
.carousel-control-next i {
	margin-right: -4px;
}		
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border: none;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
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
                  <li><a href="terme.php">terme et Conditions </a></li>
                </ul>
                  
                </li>
              </ul>
              <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
            </div>
          </nav>
          <div class="app-content-actions">
          <form  action="" method="GET">
        <input class="search-bar" name="search" placeholder="Search..." type="text" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
   
</form>
   

<div class="app-content-actions-wrapper">
  <div class="filter-button-wrapper">
    
 
 <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
   <form action="" methode="GET">
 <div class="filter-menu">
 <label for="type_terrain">Type de terrain</label>
                  <select name="type_terrain" id="type_terrain">
                 
  <option value="1">Terrains à bâtir</option>
  <option value="2">Terrains agricoles</option>
                  </select>
                  <label for="vue_terrain">vue</label>
                  <select name="vue_terrain"id="vue_terrain">
<option value="1">Tout les vus</option>
  <option value="2">Vue sur mer</option>
  <option value="3">Vue sur terrain</option>
  <option value="4">Vue sur route</option>
                  </select>
                 
 <label>Prix</label>
<!-- ================== -->
<div class="price-input">
    <div class="field">
        <span>Min</span>
        <input type="text" name="start_prix" class="input-min" value="<?php echo isset($_GET['start_prix']) ? htmlspecialchars($_GET['start_prix']) : '2500'; ?>" />
    </div>
    <div class="seperator">-</div>
    <div class="field">
        <span>Max</span>
        <input type="text" name="end_prix" class="input-max" value="<?php echo isset($_GET['end_prix']) ? htmlspecialchars($_GET['end_prix']) : '10000'; ?>" />
    </div>
</div>
      <label>Surface</label>
      <!-- ================== -->
      <div class="price-input">
        <div class="field">
          <span>min</span>
          <input type="text" name="start_surface"  value="<?php if(isset($_GET['start_surface'])){echo $_GET['start_surface'];}else {echo"50";
            # code...
          } ?>"class="input-min"/>
        </div>
        <div class="seperator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="text" name="end_surface" class="input-max" value="<?php if(isset($_GET['end_surface'])){echo $_GET['end_surface'];}else {echo"1000";
          }
            # code...  } ?>"class="input-max"/>
        </div>
      </div>
    <!-- ======================================= -->
      <div class="filter-menu-buttons">
        <button class="filter-button reset" style="margin-right:90px">
          <a href="publishoffre.php">Reset</a>
        </button>
        <button class="filter-button apply" >
          Apply
        </button>
      </div>
      </form>
    </div>
  </div>
 
 



 
             
              <button class="action-button list active" title="List View">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
              </button>
              <button class="action-button grid" title="Grid View">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
              </button>
            </div>
          </div>
        
            </div>
          </div>
          <!-- cards -->
          <div class="container mt-5">
    <div class="products-area-wrapper tableView">
        <div class="products-header">
            <div class="product-cell image">Image
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                    <!-- SVG Path for image icon -->
                    <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/>                 
                </svg>
            </div>
            <div class="product-cell title">Titre
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                    <!-- SVG Path for title icon -->
                    <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/>                 
                </svg>
            </div>
            <div class="product-cell sales">Wilaya
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                    <!-- SVG Path for wilaya icon -->
                    <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/>                 
                </svg>
            </div>
            <div class="product-cell address">Adresse
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                    <!-- SVG Path for address icon -->
                    <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/>                  
                </svg>
            </div>
            <div class="product-cell stock">Surface
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                    <!-- SVG Path for surface icon -->
                    <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/>
                </svg>
            </div>
            <div class="product-cell price">Prix
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                    <!-- SVG Path for price icon -->
                    <path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/>
                </svg>
                
            </div>
        </div>
        
        <?php foreach ($formul as $offer):
        $image =base64_encode($offer['image']) ; ?>

          <?php if ($offer['status_offre'] == 1) {?>
         
          <div class="products-row">
              <button class="cell-more-button"> <a href="dettaileoffre.php?id=<?php echo $offer['id']; ?>" class="offer-details-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                  <circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/>
                  <circle cx="12" cy="19" r="1"/></svg>
              </button></a>
            <div class="product-cell image">
                <?php
                    if (!empty($image)) {
                       
                        echo '<img src="data:image/jpg;base64,'.$image.'" alt="product">';
                    } else {
                        echo '<img src="default.jpg" alt="product">';
                    }
                ?>
            </div>
            <div class="product-cell title">
                <span class="cell-label">titre:</span> <?php echo htmlspecialchars($offer['titre']); ?>
            </div>
            <div class="product-cell sales">
                <span class="cell-label">wilaya:</span> <?php echo htmlspecialchars($offer['wilaya']); ?>
            </div>
            <div class="product-cell address">
                <span class="cell-label">adress:</span> <?php echo htmlspecialchars($offer['adress']); ?>
            </div>
            <div class="product-cell stock">
                <span class="cell-label">Surface:</span> <?php echo htmlspecialchars($offer['surface']); ?> m²
            </div>
            <div class="product-cell price">
                <span class="cell-label">Prix:</span> <?php echo htmlspecialchars($offer['prix']); ?> DZD
            </div>
            </div>
       <?php }?>
        <?php endforeach; ?>

        </div>        
        </div>
      </div>
     
     </form>



     <script>
    

    

        document.querySelector(".jsFilter").addEventListener("click", function () {
  document.querySelector(".filter-menu").classList.toggle("active");
});



document.querySelector(".grid").addEventListener("click", function () {
  document.querySelector(".list").classList.remove("active");
  document.querySelector(".grid").classList.add("active");
  document.querySelector(".products-area-wrapper").classList.add("gridView");
  document
    .querySelector(".products-area-wrapper")
    .classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function () {
  document.querySelector(".list").classList.add("active");
  document.querySelector(".grid").classList.remove("active");
  document.querySelector(".products-area-wrapper").classList.remove("gridView");
  document.querySelector(".products-area-wrapper").classList.add("tableView");
});
// ====================================================Price
const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");

let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});
// ==============================
    </script>
</body>
 
</html>



<?php }?>