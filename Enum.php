<?php

namespace App\Common\Enum;

abstract class Enum
{
    /**
     * @var string[]
     * @var int[]|string[]|array[]|float[]
     */
    protected static array $keys = [];
    protected static array $values = [];
    protected static array $valuesKeys = [];

    public static function keyFromValue(int|string|array|float $value): ?string
    {
        $valueBuffer = is_array($value) ? md5(json_encode($value)) : $value;

        return static::valuesKeys()[$valueBuffer] ?? null;
    }

    public static function keys(): array
    {
        if (empty(static::$keys)) {
            self::init();
        }

        return static::$keys;
    }

    public static function valuesKeys(): array
    {
        if (empty(static::$valuesKeys)) {
            self::init();
        }

        return static::$valuesKeys;
    }

    private static function init(): void
    {
        $reflectionClass = new \ReflectionClass(static::class);

        $reflectionConstants = $reflectionClass->getReflectionConstants(\ReflectionClassConstant::IS_PUBLIC);

        foreach ($reflectionConstants as $index => $reflectionConstant) {
            $key = $reflectionConstant->getName();
            static::$keys[] = $key;

            $value = $reflectionConstant->getValue();
            $valueBuffer = is_array($value) ? md5(json_encode($value)) : $value;
            static::$values[] = $valueBuffer;
            static::$valuesKeys[$valueBuffer] = $key;
        }
    }
}
