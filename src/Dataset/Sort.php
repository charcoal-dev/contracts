<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Dataset;

/**
 * Represents sorting directions for ordering operations.
 */
enum Sort: string
{
    case ASC = "asc";
    case DESC = "desc";
}