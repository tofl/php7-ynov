<?php

if (count($argv) == 4) {
    $a = $argv[1];
    $b = $argv[3];
    $calculation = $argv[2];
}
elseif (count($argv) == 2) {

    $possibilities = array('+', '-', 'x', '/', '%');
    $found = false;

    foreach ($possibilities as $sign) {
        if (strpos($argv[1], $sign)) {
            $expression = explode($sign, $argv[1]);
            $a = $expression[0];
            $b = $expression[1];
            $calculation = $sign;
            $found = true;
        }
    }

    if (!$found) {
        die("L'opération n'a pas été reconnue.");
    }

}
else {
    print "???";
    die("L'opération n'a pas été reconnue");
}

switch ($calculation) {
    case '+' :
        print $a + $b;
        break;
    case '-':
        print $a - $b;
        break;
    case 'x' :
        print $a * $b;
        break;
    case '/' :
        if ($b == 0) {
            die("Impossible de diviser par 0 !");
        }
        print $a / $b;
        break;
    case '%' :
        print $a % $b;
        break;
    default :
        print 'Impossible à calculer...';
}