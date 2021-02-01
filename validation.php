<?php

    $password = $_POST["password"];
    if(empty($password)) {
        $password_error = "Väärä salasana!";
    }
    if($password != 0000) {
        $password_error = "Väärä salasana!";
    }
    else {
        return true;
    }

    include("index.php");
?>
