<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 * 
 * To test the exercise copy the function and past it in HackerRank
 * https://www.hackerrank.com/challenges/birthday-cake-candles/problem?isFullScreen=true
 */

function birthdayCakeCandles($candles) {
    // Write your code here
    $maxHeight = max($candles);
    $count = 0;
    foreach ($candles as $candle) {
        if ($candle == $maxHeight) {
            $count++;
        }
    }
    
    return $count;
}

?>
