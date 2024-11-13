<?php

/*
 * Complete the 'minimumNumber' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING password
 */

function minimumNumber($n, $password) {
   
    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";
    
    $has_number = false;
    $has_lower = false;
    $has_upper = false;
    $has_special = false;
    
   
    for ($i = 0; $i < $n; $i++) {
        $char = $password[$i];
        if (strpos($numbers, $char) !== false) $has_number = true;
        if (strpos($lower_case, $char) !== false) $has_lower = true;
        if (strpos($upper_case, $char) !== false) $has_upper = true;
        if (strpos($special_characters, $char) !== false) $has_special = true;
    }
    
    $tipos_faltantes = 0;
    if (!$has_digit) $tipos_faltantes++;
    if (!$has_lower) $tipos_faltantes++;
    if (!$has_upper) $tipos_faltantes++;
    if (!$has_special) $tipos_faltantes++;
    
    
    return max($tipos_faltantes, 6 - $n);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$password = rtrim(fgets(STDIN), "\r\n");

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($fptr);
