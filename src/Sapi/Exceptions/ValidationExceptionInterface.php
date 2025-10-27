<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Sapi\Exceptions;

/**
 * Interface ValidationExceptionInterface
 * @package Charcoal\Contracts\Sapi
 */
interface ValidationExceptionInterface extends \Throwable
{
    public function getContext(): array;
}