<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Sapi;

/**
 * Interface DomainMessageEnumInterface
 * @package Charcoal\Contracts\Sapi
 */
interface DomainMessageEnumInterface extends \UnitEnum
{
    public function getTranslatedMessage(SapiRequestContextInterface $context): string;
}