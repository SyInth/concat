<?php
/**
 * Created by PhpStorm.
 * User: theodoreyip
 * Date: 31/01/2018
 * Time: 11:46
 */

$testData = [
    ['a','b','ab'],
    [0,'b','ERROR'],
];

foreach ($testData as $item) {

    $result = yann($item[0],$item[1]);

    if ($result === $item[2]) {
        echo $item[0].' '.$item[1].' | BRAVO'.' - '.$result.PHP_EOL;
    } else {
        echo 'PAS BRAVO'.' - '.$result.PHP_EOL;
    }
}



