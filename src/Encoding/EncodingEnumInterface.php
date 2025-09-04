<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Encoding;

use Charcoal\Contracts\Buffers\ReadableBufferInterface;

/**
 * Provides methods for encoding, decoding, and determining if a string
 * is already encoded. For Enums to implement a group of encoding methods.
 */
interface EncodingEnumInterface
{
    public function isEncoded(string $str): bool;

    public function encode(ReadableBufferInterface|string $raw): string;

    public function decode(string $encoded): string;
}