<?php

use function SourcePot\Functions\sayName;
use function SourcePot\Functions\getFirstName;

include 'createFunctionLoader.php';

$loadFunction = createFunctionLoader('vendor');

// Using ::class is a bit of a fiddle,
// but it means you don't need to escape the backslashes in a string
$loadFunction(SourcePot\Functions\getFirstName::class);
$loadFunction(SourcePot\Functions\sayName::class);

// returns 'Rob'
$firstName = getFirstName('Rob Watson');
// prints "Hello, Rob"
sayName($firstName);
