
<?php
session_start();

// Page réservée aux personnes connectées...
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit;
}

// ... et, parmi elles, à l'administrateur
if ($_SESSION["role"] != "admin") {
    header("Location: espace.php");
    exit;
}

include "inc/infos.php";
require "inc/bdd.php";

$requete = $pdo->query("SELECT prenom, nom, service, role FROM utilisateurs ORDER BY nom");
$utilisateurs = $requete->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>TechSolutions : gestion des utilisateurs</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include "inc/menu.php"; ?>

    <h1>Gestion des utilisateurs</h1>

    <h2>Les comptes du personnel</h2>

    <p>Nombre de comptes : <?php echo count($utilisateurs); ?></p>

    <table width="100%" border="1">
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Service</th>
            <th>Rôle</th>
        </tr>

        <?php foreach ($utilisateurs as $u) { ?>
        <tr>
            <td><?php echo $u["prenom"]; ?></td>
            <td><?php echo $u["nom"]; ?></td>
            <td><?php echo $u["service"]; ?></td>
            <td><?php echo $u["role"]; ?></td>
        </tr>
        <?php } ?>

    </table>

    <p><a href="espace.php">Retour à mon espace</a></p>

    <?php include "inc/pied.php"; ?>

</body>
</html>
