<?php

require "init.php";
require "StudentHandler.php";
require_once __DIR__ . '/vendor/autoload.php';


$id = $_GET['id'];
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$student = $collection->findOne(
    ['_id' => new MongoDB\BSON\ObjectId("$id")]
);

$template = $mustache->loadTemplate('edit');
echo $template->render(compact('student'));
?>