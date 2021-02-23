<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vieraskirja</title>
</head>
<body>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if(empty($name) or empty($email)) {
        $error = "Nimi tai Sähköposti puuttuu!";
        include("index.php");
    }

    elseif (isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["message"])){
        $form = [$name, $email, $message];
        $file = fopen("comments.csv", "a");
        fputcsv($file, $form);
        fclose($file);
         require_once("functions.php");
         commentStyle();
}
    
    else {
        require_once("functions.php");
        commentStyle();
    }
?>
    <input type="button" name="deletebtn" value="Poista">
        <?php /*
         if ($_POST) {
            if (isset($_POST["deletebtn"])) {
                delete();
        } 
    }
     nappi toimintaan!   */?>
</body>
</html>



