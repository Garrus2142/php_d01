#!/usr/bin/php
<?php

	function ft_explode($str) {
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
		return ($tab);
	}
	if ($argc > 1) {
		$tab = ft_explode($argv[1]);
		if (count($tab) > 1) {
			array_push($tab, $tab[0]);
			$tab[0] = '';
		}
		$im = trim(implode(' ', $tab));

		if (strlen($im) > 0)
			echo "$im\n";
	}
?>
