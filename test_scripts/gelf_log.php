<?php

require_once __DIR__ . '/vendor/autoload.php';

// When creating a logger without any options, it logs automatically to localhost:12201 via UDP
// For a move advanced configuration, check out the advanced.php example
$logger = new Gelf\Logger();

// Log!
$logger->alert( "Something happened!", ['more_info' => 'Foo', 'random_int' => random_int(1,6)]);
