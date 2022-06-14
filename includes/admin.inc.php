<h1>Administration</h1>

<?php

$requete = 'SELECT id_utilisateur, nom, prenom, mail FROM utilisateurs';

$querySelect = new Sql();
$select = $querySelect->recup($requete);

// dump($select);

$html = "<table>
        <tr>
            <th>Noms</th>
            <th>Prénoms</th>
            <th>Mails</th>
        </tr>";

foreach ($select as $row) {
    $html .= "<tr id=" . $row['id_utilisateur'] . '>';
    $html .= '<td id="nom">' . $row['nom'] . "</td>";
    $html .= '<td id="prenom">' . $row['prenom'] . "</td>";
    $html .= '<td id="mail">' . $row['mail'] . "</td>";
    $html .= "<td>" . '<button><a href="index.php?page=update&id=' . $row['id_utilisateur'] . '">Modifier</a></button>' . "</td>";
    $html .= "<td>" . '<button><a href="index.php?page=delete&id=' . $row['id_utilisateur'] . '">Supprimer</button>' . "</td>";
    $html .= "</tr>";
}

$html .= "</table>";

echo $html;
