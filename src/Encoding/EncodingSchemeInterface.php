<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Encoding;

use Charcoal\Contracts\Buffers\ReadableBufferInterface;

/**
 * Represents a marker for encoding-related functionality.
 */
interface EncodingSchemeInterface
{
    public function isEncoded(string $str): bool;

    public function encode(ReadableBufferInterface|string $raw): string;

    public function decode(string $encoded): string;
}