<?php

namespace App\Enums;

abstract class BaseEnum
{
    /**
     * Get All Filed
     * @return array
     */
    public static function All(): array
    {
        $reflection = new \ReflectionClass(static::class);
        return $reflection->getConstants();
    }

    /**
     * Get All Filed
     * @return array
     */
    public static function asString($separator = ","): string
    {
        $reflection = new \ReflectionClass(static::class);
        return implode($separator, array_keys($reflection->getConstants()));
    }

    /**
     * Get All Filed
     * @return array
     */
    public static function valueAsString($separator = ","): string
    {
        $reflection = new \ReflectionClass(static::class);
        return implode($separator, $reflection->getConstants());
    }

    /**
     * Get All Filed
     * @return array
     */
    public static function getKeyByValue($value): string
    {
        $reflection = new \ReflectionClass(static::class);
        $flipConstants = array_flip($reflection->getConstants());
        return $flipConstants[$value] ?? "";
    }

    /**
     * Get Title a Field
     * @param string $key
     * @return string
     */
    public static function trans($key = null, $default = '-')
    {
        if (empty($key)) return '';
        $namespace = explode('\\', static::class);
        $address = 'admin/enums/' . end($namespace) . ".$key";
        return trans($address) != $address ? trans($address) : $default;
    }

}
