<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\ServerApi;

use Charcoal\Contracts\Enums\SapiType;

/**
 * Represents the interface for the server API, providing a type marker,
 * that define the contract to be implemented by classes interacting with the server.
 * @property-read SapiType $type The type of server API (SAPI) being used.
 */
interface ServerApiInterface
{
}