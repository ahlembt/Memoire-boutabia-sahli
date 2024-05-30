<?php
require('connexion.php');

$RDV=$access->prepare('SELECT * FROM formul');
$executeOK=$RDV->execute();
$formul=$RDV->fetchAll();





?>