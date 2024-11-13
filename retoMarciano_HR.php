<?php

/*
 * Complete the 'marsExploration' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function marsExploration($s) {
    $pattern = "SOS";
    $errors = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] != $pattern[$i % 3]) {
            $errors++;
        }
    }

    return $errors;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
$s = rtrim(fgets(STDIN), "\r\n");
$result = marsExploration($s);
fwrite($fptr, $result . "\n");
fclose($fptr);

?>