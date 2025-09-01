<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

/**
 * Interface ByteArrayInterface
 * Represents a contract for objects that can provide their data as a binary string.
 */
interface ByteArrayInterface
{
    public function bytes(): string;

    public function length(): int;
}