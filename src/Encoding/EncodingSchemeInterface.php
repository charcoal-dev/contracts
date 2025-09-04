<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Encoding;

use Charcoal\Contracts\Buffers\ReadableBufferInterface;

/**
 * Defines the structure for an encoding scheme, including methods
 * for determining if a string is encoded, encoding raw data,
 * and decoding encoded strings.
 *
 * Implement this on an Enum that is a group of EncodingSchemeStaticInterface.
 */
interface EncodingSchemeInterface
{
    public function isEncoded(string $str): bool;

    public function encode(ReadableBufferInterface|string $raw): string;

    public function decode(string $encoded): string;
}