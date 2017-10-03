#!/usr/bin/php
<?php
	if ($argc == 2) {
		$argv[1] = trim($argv[1]);
		$tab = preg_split('/^(-?[0-9]+) *(\+|\-|\*|\/|\%) *(-?[0-9]+)$/', $argv[1], -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

		if (count($tab) == 3) {
			$tab[0] = trim($tab[0]);
			$tab[1] = trim($tab[1]);
			$tab[2] = trim($tab[2]);
			
			if (is_numeric($tab[0]) && is_numeric($tab[2])) {
				switch($tab[1]) {
					case '+':
						echo ($tab[0] + $tab[2])."\n";
						break;
					case '-':
						echo ($tab[0] - $tab[2])."\n";
						break;
					case '*':
						echo ($tab[0] * $tab[2])."\n";
						break;
					case '/':
						echo ($tab[0] / $tab[2])."\n";
						break;
					case '%':
						echo ($tab[0] % $tab[2])."\n";
						break;
					default:
						echo "Syntax Error\n";
				}
			}
			else
				echo "Syntax Error\n";
		}
		else 
			echo "Syntax Error\n";
	}
	else {
		echo "Incorrect Parameters\n";
	}
?>