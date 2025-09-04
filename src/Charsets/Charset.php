<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Charsets;

/**
 * This enum provides constants for common character encodings, such as ASCII and UTF-8.
 */
enum Charset: string
{
    case ASCII = "ASCII";
    case UTF8 = "UTF-8";
}