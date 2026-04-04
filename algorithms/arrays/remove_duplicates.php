<?php

/**
 * Remove Duplicates from Sorted Array
 * Dado um array ordenado, remova os elementos duplicados.
 */

function removeDuplicates(array $nums): array
{
    if (empty($nums)) {
        return [];
    }

    $result = [$nums[0]];

    foreach ($nums as $num) {
        if ($num !== end($result)) {
            $result[] = $num;
        }
    }

    return $result;
}