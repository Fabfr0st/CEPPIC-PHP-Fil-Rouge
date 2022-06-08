<h1>Inscription</h1>

<?php
if (isset($_POST["frmInscription"])) {
  $message = "je viens du formulaire";
  $nom = htmlentities(trim($_POST['nom']));
  $prenom = htmlentities(trim($_POST['prenom']));
  $mail = htmlentities(trim($_POST['mail']));

  $erreurs = array();

  if (mb_strlen($nom) === 0)
    array_push($erreurs, "Il manque votre nom.");
  if (mb_strlen($prenom) === 0)
    array_push($erreurs, "Il manque votre prénom.");
  if (mb_strlen($mail) === 0)
    array_push($erreurs, "Il manque votre e-mail.");

  if (count($erreurs)) {
    $messageErreur = "<ul>";
    for ($i = 0; $i < count($erreurs); $i++) {
      $messageErreur .= "<li>";
      $messageErreur .= $erreurs[$i];
      $messageErreur .= "</li>";
    }
    $messageErreur .= "</ul>";
    echo $messageErreur;
    include "./includes/frmInscription.php";
  } else
    displayMessage("Pas d'erreur");
} else {
  $nom = $prenom = $mail = "";
  $message = "je ne viens pas du formulaire";
  include "./includes/frmInscription.php";
}
displayMessage($message);
