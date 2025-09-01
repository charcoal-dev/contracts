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
 * Defines the contract for encoding and decoding data buffers using specific encoding schemes.
 */
interface BufferEncoderInterface
{
    public function encode(EncodingSchemeInterface $encoding, ReadableBufferInterface $data): string;

    public function decode(EncodingSchemeInterface $encoding, string $data): ByteArrayInterface;
}