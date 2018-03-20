<?php
$f = file_get_contents($argv[1]);
$a = strlen($f);
$e = [];

for ($i = 0; $i < $a; $i++) {
    $c = $f[$i];
    if ($c != "\n" && $c != " ") {
        array_key_exists($c, $e) ? $e[$c]++ : $e[$c] = 1;
        $b++;
    }
}

print_r($e);
echo count($e) . '-' . $b;