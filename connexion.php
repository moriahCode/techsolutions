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

    <h1>Connexion</h1>
    <p class="accent">Espace client TechSolutions</p>
    <p>Cette page est une maquette. La connexion ne permet pas encore d'ouvrir un vrai compte.</p>
    <?php include "inc/pied.php"; ?>
</body>
</html>
