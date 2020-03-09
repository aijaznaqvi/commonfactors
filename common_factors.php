<?php
//execution command: php common_factors.php 10 15

//echo 'script name: ' . $argv[0] . PHP_EOL;
if ($argc < 3) {
    echo "Insufficient number of arguments." . PHP_EOL;
    exit(1);
}

if ($argv[1] > 10**12 && $argv[2] > 10**12) {
    echo "Argument 1 and 2 are out of range." . PHP_EOL;
    exit(1);
} elseif ($argv[1] > 10**12) {
    echo "Argument 1 is out of range." . PHP_EOL;
    exit(1);
} elseif ($argv[2] > 10**12) {
    echo "Argument 2 is out of range." . PHP_EOL;
    exit(1);
}

$a = $argv[1];
$b = $argv[2];
$min = ($a < $b ) ? $a : $b;
$common_factors = [];
$common_factors_count = 0;
for ($i = 1; $i <= $min; $i++) {
    if (($a%$i==0) && ($b%$i==0)) {
        $common_factors[] = $i;
//        echo 'common factor: ' . $i . PHP_EOL;
        $common_factors_count++;
    }
}
//echo "The number of common factors of $a and $b is $common_factors_count." . PHP_EOL;
echo $common_factors_count . PHP_EOL;

$message = '';
for ($x = 0; $x < $common_factors_count; $x++) {
    if ($x == 0) {
        $message .= $common_factors[$x];
    } elseif ($x > 0 && $x < $common_factors_count - 1) {
        $message .= ", $common_factors[$x]";
    } elseif ($x == $common_factors_count - 1) {
        $message .= " and $common_factors[$x]";
    }
}
if ($common_factors_count == 0) {
//    echo "There are no common factors of $a and $b";
} else {
//    echo "The common factors of $a and $b are " . $message;
}
//echo "." . PHP_EOL;