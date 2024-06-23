<?php
// functions.php

// Fonction pour valider et nettoyer les données entrées par l'utilisateur
function clean_input($data) {
    // Suppression des espaces excessifs, des caractères spéciaux, etc.
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Autres fonctions utilitaires selon les besoins
?>
