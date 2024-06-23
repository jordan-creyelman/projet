<?php
// config.php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'votre_nom_utilisateur');
define('DB_PASSWORD', 'votre_mot_de_passe');
define('DB_NAME', 'nom_de_votre_base_de_donnees');

// Tentative de connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérification de la connexion
if ($conn === false) {
    die("Erreur : Impossible de se connecter. " . mysqli_connect_error());
}
?>
