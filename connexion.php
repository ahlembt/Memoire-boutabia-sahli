<?php
try {
  
    $access = new PDO('mysql:host=localhost;dbname=venta;charset=utf8', 'root', '');
    // Ajout d'attributs pour afficher les erreurs et activer le mode exception
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données: " . $e->getMessage());
}
?>
