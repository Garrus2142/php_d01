#!/usr/bin/php
<?php
	if ($argc > 1) {
		$str = trim($argv[1], " ");
		$epur_str = '';
		$isword = false;

		for ($i = 0; $i < strlen($str); $i++) {
			if ($isword) {
				$epur_str = $epur_str.$str[$i];
				if ($str[$i] == ' ')
					$isword = false;
			} 
			elseif ($str[$i] != ' ') {
				$isword = true;
				$epur_str = $epur_str.$str[$i];
			}
		}
		if (strlen($epur_str) > 0)
			echo "$epur_str\n";
	}
?>
