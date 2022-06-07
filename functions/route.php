<?php

function route($default): void
{
  $files = glob("./includes/*.inc.php");
  $page = $_GET['page'] ?? 'accueil';
  $page = "./includes/" . $page . ".inc.php";

  if (in_array($page, $files))
    require $page;
  else
    require "./includes/" . $default . ".inc.php";
}
