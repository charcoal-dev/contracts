<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Sapi;

/**
 * Represents the type of Server API (SAPI) being used by the PHP environment.
 * This enumeration defines the different execution contexts in which PHP can operate.
 */
enum SapiType
{
    case Http;
    case Cli;
}