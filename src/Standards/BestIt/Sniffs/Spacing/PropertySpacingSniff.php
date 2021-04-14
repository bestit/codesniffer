<?php

declare(strict_types=1);

namespace BestIt\Sniffs\Spacing;

use SlevomatCodingStandard\Sniffs\Classes\PropertySpacingSniff as BaseSniff;

/**
 * Properties must be separated by a line.
 *
 * @author blange <bjoern.lange@bestit-online.de>
 * @package BestIt\Sniffs\Spacing
 */
class PropertySpacingSniff extends BaseSniff
{
    /**
     * There MUST be a line even without comments.
     *
     * @var int
     */
    public $minLinesCountBeforeWithoutComment = 1;
}
