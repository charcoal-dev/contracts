<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Serialization;

/**
 * Provides a contract for objects that define dependencies required
 * during the unserialization process, ensuring safe restoration of object state.
 */
interface SafeSerializationInterface
{
    /** @return class-string[] */
    public static function unserializeDependencies(): array;
}