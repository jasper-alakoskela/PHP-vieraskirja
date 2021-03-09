<?php
$i = 1;

$fileName = "comments.csv";

$lineNum = $_GET["lineNum"];

deleteMessage($fileName, $lineNum);

function deleteMessage ($fileName, $lineNum) {
    if (!is_writable($fileName)) {
    print "The file $fileName is not writable";
    exit;
    }

    else {   
    $fileArr = file($fileName);
    }

    $lineToDelete = $lineNum-1;

    if($lineToDelete > sizeof($fileArr)) {
        print "Virhe";
        exit;
    }

    unset($fileArr["$lineToDelete"]);

    if (!$fp = fopen($fileName, 'w+'))
       {
          print "Ei voida avata ($fileName)";
           exit;
      }
 
    if($file) {
      foreach($fileArr as $line) { fwrite($fp,$line); }
      fclose($fp);
      }
  
  echo "Poisto onnistui!";
}