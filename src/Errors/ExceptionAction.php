<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Errors;

/**
 * Enum ExceptionAction
 * Represents the possible actions that can be taken when an exception occurs.
 */
enum ExceptionAction
{
    case Throw;
    case Ignore;
    case Log;
}