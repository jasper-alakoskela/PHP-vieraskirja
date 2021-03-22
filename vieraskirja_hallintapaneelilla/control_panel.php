<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vierailijat</title>
</head>
<body>
    <h1>Vierailijat</h1><hr><br>
    <a style="text-decoration:none; background-color: rgb(230, 230, 230); color: black; border: solid 2px black; border-radius: 5px; padding: 2px;" href="index.php">Etusivulle</a>
    <?php

    if (isset($_POST["password"])) {
        if ($_POST["password"] == 1234) {
        }
        else if (empty($_POST["password"])) {
            echo "<script>alert('Kirjautuminen epäonnistui')</script>";
            echo "<script>location.href='index.php'</script>";
        }
        else {
            echo "<script>alert('Kirjautuminen epäonnistui')</script>";
            echo "<script>location.href='index.php'</script>";
        }
    }
              
            if (($file = fopen("comments.csv", "r")) !== FALSE) {
                $lineNro = 0;
                while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
                    echo "<h3>$data[0]</h3>";
                    echo "<p>$data[1]</p>";
                    echo "<p>$data[2]</p>";
                    echo '<a style="text-decoration:none; background-color: rgb(230, 230, 230); color: black; border: solid 2px black; border-radius: 5px; padding: 2px;"
                        href="delete.php?line='. $lineNro++ .'">Poista</a>';
                }
            }
        
        $fileName = "comments.csv";
        
        function delete($fileName, $line) {
            $fileArray = file($fileName);
            var_dump($fileArray);
            unset($fileArray[$line]);
            file_put_contents($fileName, $fileArray);
        }
        
    ?>
</body>
</html>

