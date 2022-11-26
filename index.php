<?php

require "init.php";
require "StudentHandler.php";
require_once __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$data = $collection->find();

$template = $mustache->loadTemplate('index');
echo $template->render(compact('data'));
?>