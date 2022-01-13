<?php
$data = [];
// $handle = fopen("data.csv");
if (($handle = fopen("data/data.csv", "r")) !== FALSE) {
    $first = true;
    while (($personne = fgetcsv($handle, 0, ",")) !== FALSE) {
        if($first){
            $first = false;
        } else {
            $data[] = $personne;
        }
    }
    fclose($handle);
}

$f = "saveCSV.php";
$dis = "array";