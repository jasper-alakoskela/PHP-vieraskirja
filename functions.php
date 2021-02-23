<?php

function commentStyle() {
    if (($file = fopen("comments.csv", "r")) !== FALSE) {
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            echo "<h2>$data[0]</h2>";
            echo "<p>$data[1]</p>";
            echo "<p>$data[2]</p>";
        }
            
    }
}

    function delete() {
        $comments = file_get_contents("comments.csv");
        if (($file = fopen("comments.csv", "r")) !== FALSE) {
            while(($comments = fgetcsv($file, 1000, "\n")) !== FALSE){
        array_splice($comments, 1);
        implode("\n", $comments);
        file_put_contents("comments.csv", $comments);

        }
    } 
}
//echo '<button>Poista</button>';
?>