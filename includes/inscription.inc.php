<h1>Inscription</h1>

<?php
if (isset($_POST["frmInscription"])) {
  $message = "je viens du formulaire";
  dump($_POST);
} else
  $message = "je ne viens pas du formulaire";
echo $message;

?>
