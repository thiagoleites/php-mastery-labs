<?php

/**
 * Two Sum
 * Dado um array e um target, retorne os índices dos dois números
 * que somam o target.
 */

function twoSum(array $nums, int $target): array
{
    $map = [];

    foreach ($nums as $i => $num) {
        $diff = $target - $num;
        if (isset($map[$diff])) {
            return [$map[$diff], $i];
        }
        $map[$num] = $i;
    }

    return [];
}
