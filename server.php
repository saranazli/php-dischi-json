<?php

$diskString = file_get_contents('dischi.json');

$disk = json_decode($diskString); 

if(isset($_POST['newDiskForm'])){
  $new_card = [
    'title' => $_POST['newTitle'],
    'author' => $_POST['newAuthor'],
    'year' => $_POST['newYear'],
    'genre' => $_POST['newGenre'],
  ];
  $disk[] = $new_card;
  file_put_contents('dischi.json', $disk);
}

header('Content-Type: application/json');

echo json_encode($disk);

?>