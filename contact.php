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
    <title>Contact - TechSolutions</title>
</head>
<body>
    <?php include "inc/menu.php"; ?>

    <h1>Contactez-nous</h1>
    <p class="accent">Une question ou un besoin informatique ?</p>
    <p>Vous pouvez nous contacter pour demander des renseignements sur nos services.</p>

    <h2>Nos coordonnées</h2>
    <p><strong>Téléphone :</strong> <?php echo $telephone; ?></p>
    <p><strong>Adresse :</strong> <?php echo $adresse; ?></p>

<h2>Nos horaires d'ouverture</h2>

<table width= "100%">
    <tr>
        <th>Jour</th>
        <th>Horaires</th>
    </tr>
    <tr>
        <td>Lundi au vendredi</td>
        <td>08h30 - 18h00</td>
    </tr>
    <tr>
        <td>Samedi</td>
        <td>09h00 - 12h00</td>
    </tr>
    <tr>
        <td>Dimanche</td>
        <td>Fermé</td>
    </tr>
</table>

    <?php include "inc/pied.php"; ?>
</body>
</html>
