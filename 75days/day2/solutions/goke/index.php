<?php
// PHP version 8.1
/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isIsomorphic(string $s, string $t): bool
{
    $hash1 = $hash2 = [];
    for ($i = 0; $i < strlen($s); $i++) {
        $hash1[$s[$i]] = $t[$i];
        $hash2[$t[$i]] = $s[$i];
    }
    return array_keys($hash1) == array_values($hash2) && array_keys($hash2) == array_values($hash1);
}

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isSubsequence(string $s, string $t): bool
{
    $j = 0;
    for ($i = 0; $i < strlen($t); $i++)
        if ($s[$j] == $t[$i])
            $j++;
    return $j == strlen($s);
}
