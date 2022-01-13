<?php
$data = [];
if (file_exists('data/data.xml')) {
    $xml = simplexml_load_file('data/data.xml');
    foreach($xml as $personne){
        $data[] = $personne;
    }
} 

$f = "saveXML.php";
$dis = "obj";