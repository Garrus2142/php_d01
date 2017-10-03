#!/usr/bin/php
<?php
    $stdin = fopen('php://stdin', 'r');

    if ($stdin !== FALSE) {
        echo "Entrez un nombre: ";
        while ($line = fgets($stdin)) {
            // Remove "\n"
            if ($line[strlen($line) - 1] == "\n")
                $line = substr($line, 0, strlen($line) - 1);

            if (is_numeric($line)) {
                echo "Le chiffre $line est ";
                if ($line % 2 == 0)
                    echo "Pair\n";
                else
                    echo "Impair\n";
            }
            else
                echo "'$line' n'est pas un chiffre\n";
            echo "Entrez un nombre: ";
        }
    } else {
        echo "Error stdin\n";
    }
?>