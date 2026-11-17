
<?php
session_start();

// Seul l'administrateur peut supprimer un compte
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit;
}

if ($_SESSION["role"] != "admin") {
    header("Location: espace.php");
    exit;
}

require "inc/bdd.php";

// Récupération de l'identifiant du compte à supprimer
$id = $_POST["id"];

$requete = $pdo->prepare("DELETE FROM utilisateurs WHERE id = ?");
$requete->execute([$id]);

// Retour à la liste des utilisateurs
header("Location: utilisateurs.php");
exit;
?>