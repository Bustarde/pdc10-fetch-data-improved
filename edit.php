<?php

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new MongoDB\Client(
   'mongodb+srv://'.$_ENV['MDB_USER'].':'.$_ENV['MDB_PASS'].'@'.$_ENV['ATLAS_CLUSTER_SRV'].'/sample_restaurants'
);

$collection = $client->sample_restaurants->restaurants;

$updateResult = $collection->updateOne(
   [ 'restaurant_id' => '40356151' ],
   [ '$set' => [ 'name' => 'Brunos on Astoria' ]]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());