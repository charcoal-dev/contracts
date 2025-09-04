<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

use Charcoal\Contracts\Encoding\EncodingSchemeInterface;

/**
 * Defines a contract for managing and manipulating a byte array representation.
 */
interface ByteArrayInterface
{
    public function length(): int;

    public static function decode(EncodingSchemeInterface $scheme, string $data): static;
}