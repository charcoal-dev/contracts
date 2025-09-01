<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

/**
 * Represents an interface for a buffer with arbitrary length capabilities.
 * Extends the functionality of the ByteArrayInterface to allow for
 * dynamic resizing or manipulation of the buffer size.
 */
interface ImmutableBufferInterface extends ByteArrayInterface
{
}