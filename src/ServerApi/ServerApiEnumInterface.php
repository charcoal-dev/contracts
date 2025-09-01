<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\ServerApi;

use Charcoal\Contracts\Enums\SapiType;

/**
 * Defines the contract for a server API enumeration interface.
 * This interface provides a method to retrieve the server API type.
 */
interface ServerApiEnumInterface
{
    public function type(): SapiType;
}