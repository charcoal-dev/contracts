<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Cipher;

use Charcoal\Contracts\Secrets\SecretKeyInterface;
use Charcoal\Contracts\Secrets\SecretsUtilityInterface;

/**
 * Provides methods for encrypting and decrypting strings and objects with the use of a secret key.
 */
interface CipherProviderInterface extends SecretsUtilityInterface
{
    public function encryptString(SecretKeyInterface $key, string $input): EncryptedStringInterface;

    public function encryptObject(SecretKeyInterface $key, object $input): EncryptedObjectInterface;

    public function decrypt(EncryptedStringInterface $input): string|object;
}