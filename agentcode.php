<?php
if (!isset($_SESSION)) {
    session_start();
  }
require('connexion.php');




$bnk=$access->prepare('SELECT * FROM rdv_agent ORDER BY date ASC');
$executeOK=$bnk->execute();
$datacnx=$bnk->fetchAll();





?>