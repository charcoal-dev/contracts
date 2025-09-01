<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Secrets;

use Charcoal\Contracts\Buffers\SensitiveKeyBufferInterface;
use Charcoal\Contracts\Cipher\CipherBindingEnumInterface;

/**
 * Represents an interface for a secret key, extending the sensitive key buffer capabilities.
 */
interface SecretKeyInterface extends SensitiveKeyBufferInterface
{
    public function id(): string;

    public function version(): int;

    public function cipher(): CipherBindingEnumInterface;

    public function request(SecretsUtilityInterface $class, string $method, ?object $subject): object;
}