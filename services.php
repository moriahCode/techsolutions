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
    <title>Nos services - TechSolutions</title>
</head>
<body>

<?php include "inc/menu.php"; ?>
    <h1>Nos services</h1>
    <p class="accent">Tout ce que votre entreprise a besoin.</p>

    <h2>Ce que nous faisons .</h2> 

    <ul>
        <li> La maintenance des postes de travail </li>
        <li> L'installation et le suivi des réseaux </li>
        <li> La sauvegarde des données </li>
        <li> l'assistance aux utilisateurs par telephone</li>
    </ul>

    <h2> Nos formules </h2>

    <table class="table" >

        <tr>

            <th width="20%" >Formule</th>
            <th width="40"> Ce qui est compris </th>
            <th width="20%"> Tarif </th>
            <th width="20%"> Tarif HT </th>

        </tr>

        <tr > 

            <td> Essentiel </td>
            <td> intervention à la demande  </td>
            <td> 60 euros de l'heure </td>
            <td> 72 euros de l'heure </td>

        </tr>

        <tr>

            <td> Sérenité </td>
            <td> Accompagnement regulier </td>
            <td><?php echo $serenite; ?> euros de l'heure </td>
            <td><?php echo $serenite * (100 + $tva) / 100; ?> euros de l'heure </td>
        
        </tr>

        <tr>
    <td>Premium</td>
    <td>Accompagnement complet</td>
    <td><?php echo $premium; ?> euros de l'heure</td>
    <td><?php echo $premium * (100 + $tva) / 100; ?> euros de l'heure</td>
</tr>
    </table>
<p>TVA au taux de <?php echo $tva; ?> %.</p>

</body>
</html>
