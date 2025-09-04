<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers\Immutable;

/**
 * Represents an interface for a fixed-length buffer, which extends the functionality
 * of an immutable buffer interface. This interface enforces a buffer with a constant,
 * unchangeable length.
 */
interface FixedLengthBufferInterface extends ImmutableBufferInterface
{
}