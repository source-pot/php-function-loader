<?php

namespace SourcePot\Functions;

function getFirstName(string $fullName): string
{
    return explode(' ', $fullName)[0];
}
