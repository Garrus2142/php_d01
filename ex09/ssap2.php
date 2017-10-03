#!/usr/bin/php
<?php
	function sortc($c)
	{
		if ($c >= 97 && $c <= 122)
			$c -= 97;
		elseif ($c >= 48 && $c <= 57)
			$c -= 20;
		else
			$c += 70;

		return ($c);
	}

	function sortcb($a, $b) {
		$a = strtolower($a);
		$b = strtolower($b);
		$i = 0;

		for (; $i < strlen($a); $i++) {
			$a_ord = sortc(ord($a[$i]));
			$b_ord = sortc(ord($b[$i]));

			if ($i + 1 > strlen($b)) {
				return (1);
			}

			if ($a_ord > $b_ord) {
				return (1);
			}
			elseif ($a_ord < $b_ord) {
				return (-1);
			}
		}
		if ($i + 1 < count($b))
			return (-1);
		return (0);
	}

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
		usort($tab, 'sortcb');
		return ($tab);
	}

	$splited = ft_split(implode(array_splice($argv, 1), ' '));
	
	foreach ($splited as $split)
		echo "$split\n";
?>