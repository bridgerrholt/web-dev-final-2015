<?php
	$currentFile = basename($_SERVER['PHP_SELF']);

	$menu++;
	$menuItem = 0;

	if ($menu == 1) {
		if ($currentFile == "index.php") {
			echo 'class="current"';
		}
	} else if ($menu == 2) {
		if ($currentFile == "a-internet.php" ||
			$currentFile == "b-ip-addresses.php" ||
			$currentFile == "n-servers.php" ||
			$currentFile == "i-seo.php" ||
			$currentFile == "f-html.php" ||
			$currentFile == "g-css.php") {
				echo 'class="current"';
		}
	} else if ($menu == 3) {
		if ($currentFile == "e-tuts-plus-site.php" ||
			$currentFile == "m-google-web-designer.php" ||
			$currentFile == "c-codecademy.php") {
				echo 'class="current"';
		}
	}

?>