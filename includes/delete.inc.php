<h1>Supprimer</h1>
<?php

$requete = 'DELETE FROM utilisateurs WHERE id_utilisateur = ' . $_GET['id'];

$querySelect = new Sql();
$delete = $querySelect->inserer($requete);

header('Location: index.php?page=admin');
