<h1>Supprimer</h1>
<?php

$requete = 'SELECT id_utilisateur, nom, prenom, mail FROM utilisateurs WHERE id_utilisateur = ' . $_GET['id'];
$requete = 'DELETE FROM utilisateurs WHERE id_utilisateur = ' . $_GET['id'];

$querySelect = new Sql();
$delete = $querySelect->inserer($requete);

header('Location: index.php?page=admin');
