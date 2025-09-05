<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Vectors;

/**
 * Represents a specialized contract for a vector structure that handles exceptions.
 * Extends the base functionality defined in the VectorInterface.
 * @template-extends VectorInterface<\Throwable>
 */
interface ExceptionsVectorInterface extends VectorInterface
{
    public function append(\Throwable $exception): self;
}