<?php

declare(strict_types=1);

function returnIntValue(int $value): int{
    // return $value;
    return $value + 1.0;
}

print(returnIntValue(5));