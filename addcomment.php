<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vieraskirja</title>
</head>
<body>
<h1>Vierailijat</h1>

<?php
    if(isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["message"])){
        $myfile = fopen("comments.html", "a") or die ("Error");
        $namefile = "<hr/>" . $_POST["name"]. "<br/>";
        $emailfile = $_POST["email"]. "<br/><br/>";
        $messagefile = $_POST["message"]. "<br/><hr/>";
        fwrite ($myfile, $namefile);
        fwrite ($myfile, $emailfile);
        fwrite ($myfile, $messagefile);
        fclose($myfile);

        include("comments.html");
    }
    else {
        include("comments.html"); 
    }
?>
</body>
</html>


