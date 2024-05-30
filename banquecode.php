<?php

 
if (!isset($_SESSION)) {
    session_start();
  }
require('connexion.php');




$RDV=$access->prepare('SELECT * FROM banque');
$executeOK=$RDV->execute();
$datacnx=$RDV->fetchAll();





?>