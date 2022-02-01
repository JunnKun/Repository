<?php
    $file_data = json_decode(file_get_contents("data.json"));
    foreach($file_data as $index => $value){
        $id = $value -> data;
        echo "[$index] $id";
    }
    $newValore = new stdClass();
    $newValore -> data = ($id+1);
    $file_data[] = $newValore;
    file_put_contents("data.json", json_encode($file_data)); 
?>