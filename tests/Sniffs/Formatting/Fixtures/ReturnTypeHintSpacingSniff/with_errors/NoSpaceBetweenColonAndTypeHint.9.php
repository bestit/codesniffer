<?php

declare(strict_types=1);

namespace BestIt\Sniffs\Formatting\ReturnTypeHintSpacingSniff\Fixtures;

class NoSpaceBetweenColonAndTypeHint
{
    public function isCorrect():bool
    {
        return true;
    }
}
