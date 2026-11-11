<?php

class Validation
{
    public static function string($value, $min = 1, $max = INF)
    {
        return strlen($value) === 0 || strlen($value) < $min || strlen($value) > $max;
    }

     public static function isNumeric($value): bool
    {
        return is_numeric($value);
    }
}