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
    <title>L'entreprise - TechSolutions</title>
</head>
<body>

    <?php include "inc/menu.php"; ?>

    <h1>À propos de TechSolutions</h1>
    <p class="accent">Une équipe locale, proche de ses clients.</p>
    <p>TechSolutions accompagne les petites entreprises de Brive-la-Gaillarde dans la gestion de leur informatique : installation, maintenance, sauvegarde et assistance.</p>

    <h2>Nos équipes</h2>
    <ul>
    <?php foreach ($equipe as $salarie) { ?>
        <li>
            <?php echo $salarie["prenom"] . " " . $salarie["nom"] . ", " . $salarie["service"]; ?>
        </li>
    <?php } ?>
    </ul>
    <p><strong>TechSolutions - Brive-la-Gaillarde - 05 55 00 00 00</strong></p>
    <?php include "inc/pied.php"; ?>
</body>
</html>
