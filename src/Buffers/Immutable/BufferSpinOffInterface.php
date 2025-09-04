<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers\Immutable;

use Charcoal\Contracts\Buffers\ReadableBufferInterface;

/**
 * Represents a contract for a buffer that can be appended or prepended to another buffer.
 */
interface BufferSpinOffInterface extends ImmutableBufferInterface
{
    public function withAppended(ReadableBufferInterface|string $data): self;

    public function withPrepended(ReadableBufferInterface|string $data): self;
}