<?php
// PHP version 8.1
/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function runningSum(array $nums): array
{
    $result = [];
    $sum = 0;
    for ($i = 0; $i < count($nums); $i++) {
        $sum += $nums[$i];
        $result[] = $sum;
    }
    return $result;
}

/**
 * @param Integer[] $nums
 * @return Integer
 */
function pivotIndex(array $nums): int
{
    $sum = array_sum($nums);
    $leftSum = 0;
    for ($i = 0; $i < count($nums); $i++) {
        $leftSum += $nums[$i - 1] ?? 0;
        if (($sum - $nums[$i]) / 2 == $leftSum) return $i;
    }
    return -1;
}