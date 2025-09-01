<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Secrets;

/**
 * Interface for a utility to manage and request secrets.
 */
interface SecretsUtilityInterface
{
    public function requestSecret(SecretsUtilityInterface $class, string $method, ?object $subject): object;
}