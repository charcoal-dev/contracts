<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Types;

/**
 * Returns a value object with original primitive type preserved.
 * In the context of primitive types, caller is almost always aware of the original type,
 * therefore, getters are there to maximize type compatibility for later operations.
 * Take a guess with of*() method without setting off TypeError in minefield.
 */
interface PreservedScalarInterface
{
    public function __construct(int|null|bool|float|string $value);

    public function primitive(): string;

    public function ofInt(): int;

    public function ofBool(): bool;

    public function ofFloat(): float;

    public function ofString(): string;

    public function ofNull(): null;
}