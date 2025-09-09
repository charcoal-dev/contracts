<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Errors;

/**
 * Represents an interface for providing additional context information
 * within the trace of an exception. It extends the base Throwable interface,
 * making it usable in the standard exception handling mechanisms.
 */
interface ExceptionTraceContextInterface extends \Throwable
{
    public function getTraceContext(): array;
}