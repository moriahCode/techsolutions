<?php include "inc/infos.php"; ?>

<?php
include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service FROM utilisateurs ORDER BY nom");
$equipe = $requete->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Connexion - TechSolutions</title>
</head>
<body>

<?php include "inc/menu.php"; ?>

    <h1> Espace salariés </h1>
    <p class="accent">Connectez-vous avec votre identifiant </p>
        <form action="verifier.php" method="get">
      <p>
        <label for="identifiant">Identifiant</label><br>
        <input type="text" id="identifiant" name="identifiant" required>
      </p>
      <p>
        <label for="motdepasse">Mot de passe</label><br>
        <input type="password" id="motdepasse" name="motdepasse" required>
      </p>
      <p>
        <button type="submit">Se connecter</button>
      </p>
    </form>
    <?php include "inc/pied.php"; ?>
</body>
</html>
