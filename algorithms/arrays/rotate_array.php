<?php

/**
 * Rotate Array
 * Rotaciona um array k posições para a direita
 */

function rotateArray(array $nums, int $k): array
{
    $n = count($nums);
    $k = $k % $n;

    return array_merge(
        array_slice($nums, -$k),
        array_slice($nums, 0, $n - $k)
    );
}