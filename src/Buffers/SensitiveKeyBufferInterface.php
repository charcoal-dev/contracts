<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

/**
 * Defines a contract for a buffer specifically designed to handle sensitive key data securely.
 * Extends FixedLengthBufferInterface, inheriting methods relevant to fixed-length buffers.
 * The interface ensures that operations involving sensitive data are explicitly defined
 * with a focus on preventing unintended exposure or serialization of such data.
 */
interface SensitiveKeyBufferInterface extends FixedLengthBufferInterface
{
    public function bytes(): never;

    public function encode(): never;

    public function __toString(): never;

    public static function __set_state(array $in): never;

    public function __sleep(): never;

    public function __wakeup(): never;

    public function serialize(): never;

    public function unserialize(string $data): never;

    public function __serialize(): never;

    public function __unserialize(array $data): never;

    public function __clone(): never;

    public function __debugInfo(): never;
}