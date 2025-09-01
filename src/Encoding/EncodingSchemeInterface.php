<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Encoding;

use Charcoal\Contracts\Buffers\ByteArrayInterface;
use Charcoal\Contracts\Buffers\ReadableBufferInterface;

/**
 * Represents a marker for encoding-related functionality.
 * Can be used with an Enum instead of concrete classes.
 */
interface EncodingSchemeInterface
{
    public function encoder(): ?BufferEncoderInterface;

    public function encode(ReadableBufferInterface $data): string;

    public function decode(string $data): ByteArrayInterface;
}