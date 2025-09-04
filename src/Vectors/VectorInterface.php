<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Vectors;

/**
 * A vector is a collection of elements, all the same type.
 * @template T of mixed
 */
interface VectorInterface extends \IteratorAggregate, \Countable
{
    public function count(): int;

    /**
     * @return \Traversable<int,T>
     */
    public function getIterator(): \Traversable;

    /**
     * @return array<int,T>
     */
    public function getArray(): array;
}