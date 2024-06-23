<?php
include('includes/db.php');

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valider les données entrées par l'utilisateur
    $username = clean_input($_POST['username']);
    $password = clean_input($_POST['password']);

    // Vérifier l'authentification dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Utilisateur authentifié, rediriger vers la page d'accueil par exemple
        header("Location: index.php");
        exit();
    } else {
        // Mauvais identifiants, afficher un message d'erreur
        echo "Identifiants incorrects. Veuillez réessayer.";
    }
}

include('templates/header.php');
?>

<h2>Connexion</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Se connecter</button>
</form>

<?php include('templates/footer.php'); ?>
