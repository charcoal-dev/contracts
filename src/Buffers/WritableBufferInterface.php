<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Buffers;

/**
 * WritableBufferInterface extends ByteArrayInterface to facilitate operations
 * involving byte manipulation and storage, specifically allowing for buffer
 * modifications such as writing data.
 */
interface WritableBufferInterface extends ByteArrayInterface
{
    public function __construct(ReadableBufferInterface|string $data = "");

    public function setMaxSize(int $bytes): self;

    public function lock(): self;

    public function unlock(): self;

    public function isLocked(): bool;

    public function append(ReadableBufferInterface|string $data): self;

    public function prepend(ReadableBufferInterface|string $data): self;

    public function toImmutable(): ImmutableBufferInterface;

    public function flush(): void;

    /**
     * @param resource $stream
     * @param int $length
     * @return void
     */
    public function fill($stream, int $length = 0): void;
}