<?php
    $file_data = json_decode(file_get_contents("data.json"));
    foreach($file_data as $index => $value){
        $id = $value -> dato;
        echo "[$index] $id";
    }
?>