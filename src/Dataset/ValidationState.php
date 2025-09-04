<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

/**
 * Part of the "charcoal-dev/base" package.
 * @link https://github.com/charcoal-dev/base
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Dataset;

/**
 * An enumeration representing the various states of validation for arbitrary data.
 */
enum ValidationState: int
{
    case Raw = 0;
    case Sanitized = 1;
    case Normalized = 2;
    case Validated = 3;
    case Trusted = 4;

    /**
     * @param ValidationState $other
     * @return bool
     */
    public function meets(ValidationState $other): bool
    {
        return $this->value >= $other->value;
    }

    /**
     * @param ValidationState $other
     * @return bool
     */
    public function fails(ValidationState $other): bool
    {
        return $this->value < $other->value;
    }
}