<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vieraskirja</title>
</head>

<body>
    <h1>Vieraskirja</h1>
    <?php 
    if(isset($_POST["submit"])) {

        if(empty($_POST["name"]) or empty($_POST["email"])) {
            echo "Nimi tai Sähköposti puuttuu!";  
         }

         else {
            $message = str_replace(PHP_EOL, "<br>", $_POST["message"]);
            $form = [$_POST["name"], $_POST["email"], $message];
            $file = fopen("comments.csv", "a");
            fputcsv($file, $form);
            fclose($file);
         }
     }
         ?>

    <form action="index.php" method="POST">
        <label for="name">Nimi</label>
        <br><br>
        <input type="text" name="name">
        <br><br>
        <label for="email">Sähköposti</label>
        <br><br>
        <input type="email" name="email">
        <br><br>
        <label for="message">Viesti</label>
        <br><br>
        <textarea name="message" cols="30" rows="5"></textarea>
        <br>
        <input type="submit" name="submit">
        </form>
        <br><br>
        <hr><h1>Vierailijat</h1>
        <?php  
        require_once("functions.php");
         commentStyle(); 
        ?>
</body>
</html>