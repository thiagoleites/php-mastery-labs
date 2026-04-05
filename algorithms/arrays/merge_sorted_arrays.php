<?php

/**
 * Merge Sorted Arrays
 */

function mergeSortedArrays(array $a, array $b): array
{
    $result = [];
    $i = 0;
    $j = 0;

    while ($i < count($a) && $j < count($b)) {
        if ($a[$i] < $b[$j]) {
            $result[] = $a[$i++];
        } else {
            $result[] = $b[$j++];
        }
    }

    while ($i < count($a)) {
        $result[] = $a[$i++];
    }

    while ($j < count($b)) {
        $result[] = $b[$j++];
    }

    return $result;
}