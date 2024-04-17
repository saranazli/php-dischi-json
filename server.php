<?php

$diskString = file_get_contents('dischi.json');

$disk = json_decode($diskString); 

header('Content-Type: application/json');
echo json_encode($disk);

?>