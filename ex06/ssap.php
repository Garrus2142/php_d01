#!/usr/bin/php
<?php
	function ft_split($str) {
		$tab = array();
		$item = '';

		for ($i = 0; $i < strlen($str); $i++) {
			if ($str[$i] == ' ') {
				if (strlen($item) > 0) {
					array_push($tab, $item);
					$item = '';
				}
			} else {
				$item = $item.$str[$i];
			}
		}

		if (strlen($item) > 0)
			array_push($tab, $item);
		sort($tab);
		return ($tab);
	}

	$splited = ft_split(implode(array_splice($argv, 1), ' '));
	
	foreach ($splited as $split)
		echo "$split\n";
?>