<?php
include('includes/db.php');
include('includes/functions.php');

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valider et nettoyer les données entrées par l'utilisateur
    $username = clean_input($_POST['username']);
    $password = clean_input($_POST['password']);
    $email = clean_input($_POST['email']);
    // Autres données à récupérer selon les besoins

    // Insérer l'utilisateur dans la base de données
    $sql = "INSERT INTO utilisateurs (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur inscrit avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

include('templates/header.php');
?>

<h2>Inscription</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>

    <label for="email">Adresse e-mail :</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">S'inscrire</button>
</form>

<?php include('templates/footer.php'); ?>
