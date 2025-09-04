<?php
/**
 * Part of the "charcoal-dev/contracts" package.
 * @link https://github.com/charcoal-dev/contracts
 */

declare(strict_types=1);

namespace Charcoal\Contracts\Types;

/**
 * This enum provides a set of predefined primitive types.
 */
enum PrimitiveType: string
{
    case String = "string";
    case Int = "int";
    case Float = "float";
    case Bool = "bool";
    case Array = "array";
    case Object = "object";
    case Null = "null";
    case Resource = "resource";

    /**
     * @param mixed $value
     * @return bool
     */
    public function matches(mixed $value): bool
    {
        return match ($this) {
            self::String => is_string($value),
            self::Int => is_int($value),
            self::Float => is_float($value),
            self::Bool => is_bool($value),
            self::Array => is_array($value),
            self::Object => is_object($value),
            self::Null => $value === null,
            self::Resource => is_resource($value),
        };
    }

    /**
     * @param mixed $value
     * @return self
     */
    public static function matchFrom(mixed $value): self
    {
        return match (true) {
            is_string($value) => self::String,
            is_int($value) => self::Int,
            is_float($value) => self::Float,
            is_bool($value) => self::Bool,
            is_array($value) => self::Array,
            is_object($value) => self::Object,
            $value === null => self::Null,
            is_resource($value) => self::Resource,
            default => throw new \InvalidArgumentException("Invalid value type: " . gettype($value)),
        };
    }
}