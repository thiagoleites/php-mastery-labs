<?php

/**
 * Product of Array Except Self
 */

function productExceptSelf(array $nums): array
{
    $n = count($nums);
    $result = array_fill(0, $n, 1);

    $left = 1;
    for ($i = 0; $i < $n; $i++) {
        $result[$i] = $left;
        $left *= $nums[$i];
    }

    $right = 1;
    for ($i = $n - 1; $i >= 0; $i--) {
        $result[$i] *= $right;
        $right *= $nums[$i];
    }

    return $result;
}