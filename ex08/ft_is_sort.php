<?php
	function ft_is_sort($tab) {
		$sort_tab = $tab;
		sort($sort_tab);

		if ($sort_tab === $tab)
			return (true);
		else
			return (false);
	}
?>