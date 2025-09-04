<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers\Support;

/**
 * Represents a contract for reading data from a byte array. This interface is intended
 * to define methods for accessing and interpreting binary data stored in a sequence of bytes.
 */
interface ByteArrayReaderInterface
{
    /**
     * Check if the pointer has reached the end of the buffer.
     * @api
     */
    public function isEnd(): bool;

    /**
     * Get the current pointer position in the buffer.
     * @api
     */
    public function pos(): int;

    /**
     * Reset the pointer to the beginning of the buffer. (p=0)
     * @api
     */
    public function reset(): self;

    /**
     * Read the next bytes from the buffer. (p=bytes)
     * @api
     */
    public function first(int $bytes): string;

    /**
     * Read the previous bytes from the buffer without changing the pointer position.
     * @api
     */
    public function lookBehind(int $bytes): string;

    /**
     * Read the next bytes from the buffer without advancing the pointer.
     * @api
     */
    public function lookAhead(int $bytes): string;

    /**
     * Read the next bytes from the buffer. (p+=bytes)
     * @api
     */
    public function next(int $bytes): string;

    /**
     * Read 1 byte for an 8-bit unsigned integer from the buffer. (p+=1)
     * @api
     */
    public function readUInt8(): int;

    /**
     * Read 2 bytes for a 16-bit unsigned integer (little-endian) from the buffer. (p+=2)
     * @api
     */
    public function readUInt16LE(): int;

    /**
     * Read 2 bytes for a 16-bit unsigned integer (big-endian) from the buffer. (p+=2)
     * @api
     */
    public function readUInt16BE(): int;

    /**
     * Read 4 bytes for a 32-bit unsigned integer (little-endian) from the buffer. (p+=4)
     * @api
     */
    public function readUInt32LE(): int;

    /**
     * Read 4 bytes for a 32-bit unsigned integer (big-endian) from the buffer. (p+=4)
     * @api
     */
    public function readUInt32BE(): int;

    /**
     * Read 8 bytes for a 64-bit unsigned integer from the buffer. (p+=8)
     * @api
     */
    public function readUInt64(): string;

    /**
     * Set the pointer to a specific position in the buffer.
     * @api
     */
    public function setPointer(int $pos): self;

    /**
     * Number of bytes remaining in the buffer.
     * @api
     */
    public function remaining(): int;

    /**
     * Get the rest of the data in the buffer, after the current pointer.
     * @api
     */
    public function getRest(): string;

}