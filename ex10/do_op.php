#!/usr/bin/php
<?php
	if ($argc == 4) {
		$argv[1] = trim($argv[1]);
		$argv[2] = trim($argv[2]);
		$argv[3] = trim($argv[3]);

		switch($argv[2]) {
			case '+':
				$res = $argv[1] + $argv[3];
				break;
			case '-':
				$res = $argv[1] - $argv[3];
				break;
			case '*':
				$res = $argv[1] * $argv[3];
				break;
			case '/':
				$res = $argv[1] / $argv[3];
				break;
			case '%':
				$res = $argv[1] % $argv[3];
				break;
		}

		echo "$res\n";
	}
	else {
		echo "Incorrect Parameters\n";
	}
?>