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
    if(empty($_POST["name"]) or empty($_POST["email"])) {
        $error = "Nimi tai Sähköposti puuttuu!";
        include("index.php");
    }

    elseif (isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["message"])){
        $myfile = fopen("comments.php", "a") or die ("Error");
        $namefile = " <hr/>" . $_POST["name"]. "<br/>";
        $emailfile = $_POST["email"]. "<br/><br/>";
        $messagefile = $_POST["message"]. "<br/><hr/>";
        
        fwrite ($myfile, $namefile);
        fwrite ($myfile, $emailfile);
        fwrite ($myfile, $messagefile);
        fclose($myfile);

        include("comments.php");
    }
    else {
        include("comments.php"); 
    }
?>
</body>
</html>


