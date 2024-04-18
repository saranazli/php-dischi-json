<?php

$diskString = file_get_contents('dischi.json');

$disk = json_decode($diskString, true); 

if(isset($_POST['newTitle'], $_POST['newAuthor'], $_POST['newYear'], $_POST['newGenre'])){
  $new_card = [
    'title' => $_POST['newTitle'],
    'author' => $_POST['newAuthor'],
    'year' => $_POST['newYear'],
    'genre' => $_POST['newGenre'],
  ];

  $disk[] = $new_card;

  file_put_contents('dischi.json', json_encode($disk));
};

header('Content-Type: application/json');

echo json_encode($disk);

?>