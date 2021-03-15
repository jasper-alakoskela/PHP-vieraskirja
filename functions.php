<?php

function commentStyle() {
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
}

$fileName = "comments.csv";

function delete($fileName, $line) {
    $fileArray = file($fileName);
    var_dump($fileArray);
    unset($fileArray[$line]);
    file_put_contents($fileName, $fileArray);
}
