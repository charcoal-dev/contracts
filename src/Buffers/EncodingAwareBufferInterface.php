<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

use Charcoal\Contracts\Encoding\EncodingSchemeInterface;

/**
 * Represents a buffer that is aware of an encoding scheme. This interface
 * extends ByteArrayInterface, allowing the buffer to manage binary data
 * while providing additional functionality related to encoding.
 */
interface EncodingAwareBufferInterface extends ByteArrayInterface
{
    public function encoding(): EncodingSchemeInterface;
}