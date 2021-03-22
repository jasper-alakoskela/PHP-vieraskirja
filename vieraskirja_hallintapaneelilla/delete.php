<?php

//annetun rivin numero joka poistetaan
if (!isset($_GET["line"])){
    die();
}

if (!is_numeric($_GET["line"])){
    die(); 
}

$line = intval($_GET["line"]);

//ladaatn csv tiedosto ja poistetaan rivi

include "control_panel.php";
delete("comments.csv", $line);

//ohjataan takaisin sivulle 

header('Location: control_panel.php');
