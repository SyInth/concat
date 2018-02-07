<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 31/01/2018
 * Time: 11:46
 */

/**
 * Concatenates strings passed as params
 * @param string $partOne
 * @param string $partTwo
 * @return string $partOne.$partTwo
 */
function yann($partOne, $partTwo)
{
    if (is_string($partOne) && is_string($partTwo)) {
        return $partOne.$partTwo;
    } else {
        return 'ERROR';
    }
}
