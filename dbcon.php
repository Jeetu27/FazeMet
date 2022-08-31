<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())
    ->withServiceAccount(__DIR__.'/test-31272-firebase-adminsdk-ctq1g-2f48015af4.json')
    ->withDatabaseUri('https://test-31272-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>