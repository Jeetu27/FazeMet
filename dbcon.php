<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())
    ->withServiceAccount(__DIR__./*Location of your Credential file here*/)
    ->withDatabaseUri(/*'your database URL here'*/);

$database = $factory->createDatabase();

?>