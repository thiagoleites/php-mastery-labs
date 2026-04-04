<?php

/**
 * Maximum Subarray
 * Dado um array de inteiros, encontre o subarray contínuo
 * com a maior soma possível.
 */

function maxSubArray(array $nums): int
{
    $maxCurrent = $nums[0];
    $maxGlobal = $nums[0];

    foreach ($nums as $num) {
        $maxCurrent = max($num, $maxCurrent + $num);
        $maxGlobal = max($maxGlobal, $maxCurrent);
    }

    return $maxGlobal;
}