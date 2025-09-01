<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Http;

use Charcoal\Contracts\ServerApiInterface;

/**
 * Represents the interface for the HTTP server API, providing method declarations
 * that define the contract to be implemented by classes interacting with the HTTP server.
 */
interface HttpServerApiInterface extends ServerApiInterface
{
    public function handle(HttpServerRequestInterface $request);
}