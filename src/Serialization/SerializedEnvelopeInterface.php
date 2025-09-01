<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Serialization;

use Charcoal\Contracts\Buffers\ImmutableBufferInterface;

/**
 * Represents the contract for a serialized envelope object.
 * Provides methods to retrieve metadata and identification details
 * about the envelope.
 */
interface SerializedEnvelopeInterface extends ImmutableBufferInterface
{
    public function ref(): ?string;

    public function version(): int;

    public function fqcn(): string;
}