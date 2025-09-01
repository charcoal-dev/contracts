<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

/**
 * Represents an interface for a fixed-length buffer.
 * Provides a method to retrieve the buffer's contents as a string.
 */
interface FixedLengthImmutableBuffer extends ImmutableBufferInterface
{
}