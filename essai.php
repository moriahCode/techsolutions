<?php
require "inc/bdd.php";

// requête SQL pour récupérer les prénoms et noms des salariés par ordre alphabétique du prénom
$requete = $pdo->query("SELECT prenom, nom FROM utilisateurs ORDER BY prenom");
$utilisateurs = $requete->fetchAll();

echo "<pre>";
print_r($utilisateurs);
echo "</pre>";

echo "Le premier de la liste est " . $utilisateurs[0]["prenom"] . " " . $utilisateurs[0]["nom"] . ".<br>";
echo "Le troisième de la liste est " . $utilisateurs[2]["prenom"] . ".<br>"; 
echo "le dernier de la liste est  " .$utilisateurs[7]["prenom"] . " " .$utilisateurs[7]["nom"] . ".<br>";

// boucle foreach qui affiche chaque salarie sur la ligne
foreach($utilisateurs as $u) {
    echo $u["prenom"] . " " . $u["nom"] . "<br>";
}