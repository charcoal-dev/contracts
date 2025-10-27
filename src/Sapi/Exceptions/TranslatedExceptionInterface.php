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
interface TranslatedExceptionInterface extends ValidationExceptionInterface
{
    public function getTranslatedMessage(): string;

    public function getTranslatedCode(): int|string;
}