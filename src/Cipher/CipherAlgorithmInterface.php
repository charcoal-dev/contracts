<?php
/*
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Cipher;

/**
 * Provider-specific catalog for cipher algorithm.
 * Ideally used with an Enum instead of concrete classes.
 */
interface CipherAlgorithmInterface
{
    /**
     * @return string Actual algorithm name; Acceptable to backend provider as-is
     */
    public function algo(): string;

    /**
     * @return int Key size in bytes
     */
    public function keySize(): int;
}