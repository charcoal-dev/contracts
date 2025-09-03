<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

use Charcoal\Contracts\Encoding\EncodingSchemeInterface;

/**
 * Defines a contract for a readable buffer that manages binary data and
 * provides functionality to retrieve its contents and encode it.
 */
interface ReadableBufferInterface extends ByteArrayInterface
{
    public function bytes(): string;

    public function pop(int $offset, int $length = null): string;

    public function read(): ByteArrayReaderInterface;

    public function encode(EncodingSchemeInterface $scheme): string;
}