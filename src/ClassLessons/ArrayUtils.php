<?php

namespace ClassLessons;

class ArrayUtils
{
    public static function remove($element, array &$array): array
    {
        $position = array_search($element, $array, true);

        if (is_int($position)) {
            unset($array[$position]);
            return $array;
        }

        return $array;
    }
}