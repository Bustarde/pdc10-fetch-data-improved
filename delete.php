<?php

include "vendor/autoload.php";

$client = new MongoDB\Client("mongodb://localhost:27017");

$collection = $client->local->students;
$result = $collection->deleteOne([
   'studentId' => 'studentId',
]);

// header("Location: index.php");
// exit();