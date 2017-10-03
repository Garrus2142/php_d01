#!/usr/bin/php
<?php
	
	function moyenne($notes)
	{
		$count = 0;
		$moyenne = 0;

		foreach ($notes as $user)
		{
			foreach ($user as $key => $note) {
				if ($key !== 'moulinette') {
					$moyenne += $note['note'];
					$count++;
				}
			}
		}

		$moyenne /= $count;
		echo "$moyenne\n";
	}

	function moyenne_user($notes)
	{
		ksort($notes);
		foreach ($notes as $key => $user) {
			$count = 0;
			$moyenne = 0;
			foreach ($user as $key2 => $note) {
				if ($key2 !== 'moulinette') {
					$moyenne += $note['note'];
					$count++;
				}
			}
			
			if ($count > 0) {
				$moyenne /= $count;
				echo "$key:$moyenne\n";
			}
		}
	}

	function ecart_moulinette($notes)
	{
		ksort($notes);
		foreach ($notes as $key => $user) {
			$count = 0;
			$ecart = 0;
			foreach ($user as $key2 => $note) {
				if ($key2 !== 'moulinette') {
					$ecart += $note['note'] - $user['moulinette'];
					$count++;
				}
			}

			$ecart /= $count;
			
			if ($count > 0) {
				echo "$key:$ecart\n";
			}
		}
	}

	$stdin = fopen('php://stdin', 'r');

	if ($argc > 1 && $stdin !== FALSE) {
		// Remove first line
		fgets($stdin);

		$notes = array();

		while ($csv = fgetcsv($stdin, 0, ';')) {
			if (!isset($csv[0]))
				$notes[$csv[0]] = array();
			
			if (strlen($csv[1]) > 0) {
				if ($csv[2] == 'moulinette') {
					$notes[$csv[0]]['moulinette'] = $csv[1];
				}
				else {
					$notes[$csv[0]][] = array(
						'note' => $csv[1],
						'noteur' => $csv[2]
					);
				}
			}
		}

		switch ($argv[1]) {
			case 'moyenne':
				moyenne($notes);
				break;

			case 'moyenne_user':
				moyenne_user($notes);
				break;

			case 'ecart_moulinette':
				ecart_moulinette($notes);
				break;
		}
	}
?>