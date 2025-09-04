<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers\Immutable;

use Charcoal\Contracts\Buffers\ByteArrayInterface;

/**
 * Represents a buffer that cannot be modified after its creation.
 * This interface extends the ByteArrayInterface, inheriting its functionality,
 * while preventing any changes to the underlying buffer.
 */
interface ImmutableBufferInterface extends ByteArrayInterface
{
}