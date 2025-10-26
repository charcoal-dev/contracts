<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Sapi;

/**
 * Interface ValidationExceptionInterface
 * @package Charcoal\Contracts\Sapi
 */
interface ValidationExceptionInterface extends \Throwable
{
    public function getTranslatedMessage(): string;

    public function getTranslatedCode(): int|string;
}