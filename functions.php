<?php

function commentStyle() {
    if (($file = fopen("comments.csv", "r")) !== FALSE) {
        while(($data = fgetcsv($file, 1000, ",")) !== FALSE){
            echo "<h3>$data[0]</h3>";
            echo "<p>$data[1]</p>";
            echo "<p>$data[2]</p>";
            echo '<a href="">Poista</a>';
        }
    }
}

function delete() {
    
}