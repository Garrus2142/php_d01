#!/usr/bin/php
<?php
	if ($argc > 2) {
		$tab = array();
		
		for ($i = 2; $i < $argc; $i++) {
			$kv = explode(':', $argv[$i]);
			if (count($kv) == 2)
				$tab[$kv[0]] = $kv[1];
		}
		
		if (isset($tab[$argv[1]]))
			echo $tab[$argv[1]]."\n";
	}
?>