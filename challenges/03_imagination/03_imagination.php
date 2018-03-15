<?php
// Tous les tests sont indépendants

// Pour débugger
var_dump($argv);
echo "\n\n";

// TEST 1
// Affiche la liste des arguments (sans le nom du fichier)
$nbrArguments = count($argv);

if ($nbrArguments > 1) {
    echo "Les arguments utilisés sont les suivants :\n";
    for ($i = 1; $i < $nbrArguments; $i++) {
        echo "\t" . $i . ') ' . $argv[$i] . "\n";
    }
}
else {
    echo 'Aucun argument n\'a été passé.';
}


// TEST 2
// Construire un rectangle
// Prend en paramètres respectivement la largeur, la hauteur et le caractère du tracé séparés par un espace

$largeur = $argv[1];
$hauteur = $argv[2];
$trace = $argv[3];

for ($i = 0; $i < $largeur; $i++) {
    if ($i == 0 OR $i == $hauteur - 1) {
        for ($j = 0; $j < $largeur; $j++) {
            echo $trace;
            if ($j == $largeur - 1) {
                echo "\n";
            }
        }
    } else {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j == 0 OR $j == $largeur - 1) {
                echo $trace;
            } else {
                echo ' ';
            }
            if ($j == $largeur - 1) {
                echo "\n";
            }
        }
    }
}

// TEST 3
function n() {
    echo "\n\n";
};

class Test
{
    public function __construct()
    {
        echo "La classe a été instanciée\n\n";
    }
}

var_dump(new Test());
n();
var_dump((bool)"Hello");
n();
var_dump((int)"Hello");
n();
var_dump((array)"Hello");