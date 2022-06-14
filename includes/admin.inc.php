<h1>Administration</h1>

<?php

$requete = 'SELECT nom, prenom, mail FROM utilisateurs';

$querySelect = new Sql();
$select = $querySelect->recup($requete);

$html = "<table>
        <tr>
            <th>Noms</th>
            <th>Prénoms</th>
            <th>Mails</th>
        </tr>";
foreach ($select as $row) {
    $html .= "<tr><td>" . $row['nom'] . "</td>";
    $html .= "<td>" . $row['prenom'] . "</td>";
    $html .= "<td>" . $row['mail'] . "</td></tr>";
}

$html .= "</table>";

echo $html;
