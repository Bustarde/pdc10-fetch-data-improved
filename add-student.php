<?php

include "vendor/autoload.php";

$client = new MongoDB\Client("mongodb://localhost:27017");

$collection = $client->local->students;
$result = $collection->insertOne([
   'studentId' => $_POST['studentId'],
   'firstName' => $_POST['firstName'],
   'lastName' => $_POST['lastName'],
   'birthdate' => $_POST['birthdate'],
   'address' => $_POST['address'],
   'program' => $_POST['program'],
   'emergencyContact' => $_POST['emergencyContact']
]);

// header("Location: index.php");
// exit();