<?php

declare(strict_types=1);

namespace BestIt\Sniffs\Comparisons;

class IsNotIdentical {
    public function __construct()
    {
        if (null === array()) {
            // Checks with empty arrays are forbidden. We don't initialize an empty array, to check for an empty array.
        }
    }
}