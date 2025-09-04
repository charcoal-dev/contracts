<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Serialization;

/**
 * Defines a contract for a callback that can be serialized and deserialized,
 * allowing callbacks to be passed or stored while maintaining functionality.
 */
interface SerializableCallback
{
    public static function getSerializable(string|array $callback, bool|string|int|null ...$args): static;

    public function __construct(string|array $callback, bool|string|int|null ...$args);

    public function invoke(): mixed;

    public function __invoke(mixed ...$args): mixed;

    public function __serialize(): array;

    public function __unserialize(array $data): void;
}