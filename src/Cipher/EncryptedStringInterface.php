<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Cipher;

use Charcoal\Contracts\Buffers\FixedLengthBufferInterface;
use Charcoal\Contracts\Buffers\ImmutableBufferInterface;
use Charcoal\Contracts\Encoding\CipherDataEncoderInterface;

/**
 * Represents an encrypted string interface which extends the functionality of an immutable buffer.
 */
interface EncryptedStringInterface extends ImmutableBufferInterface, CipherDataEncoderInterface
{
    public function iv(): FixedLengthBufferInterface;

    public function kid(): string;

    public function tag(): ?FixedLengthBufferInterface;
}