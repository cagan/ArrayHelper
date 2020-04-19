<?php
declare(strict_types=1);


namespace ArrayHelper;


class ArrayHelper
{
    public static function merge(array $arr1, array $arr2)
    {
        if (empty($arr1)) {
            return $arr2;
        }

        if (empty($arr2)) {
            return $arr1;
        }

        return array_merge($arr1, $arr2);
    }
}