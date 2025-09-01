<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Cipher;

use Charcoal\Contracts\Serialization\SerializedEnvelopeInterface;

/**
 * This interface extends the EncryptedStringInterface and SerializedEnvelopeInterface,
 * combining functionality to support operations with encrypted strings and serialized envelopes.
 */
interface EncryptedObjectInterface extends EncryptedStringInterface, SerializedEnvelopeInterface
{
}
