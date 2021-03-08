<?php

function commentStyle() {
    if (($file = fopen("comments.csv", "r")) !== FALSE) {
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            echo "<h3>$data[0]</h3>";
            echo "<p>$data[1]</p>";
            echo "<p>$data[2]</p>";
            echo '<input type="submit" name="deletebtn" value="Poista">';
        }
    }
}

    function delete() {
        $comments = file_get_contents("comments.csv");
        explode("\n",$comments);
        array_splice($comments, 0);
        implode("\n", $comments);
        file_put_contents("comments.csv", $comments);
}
?>