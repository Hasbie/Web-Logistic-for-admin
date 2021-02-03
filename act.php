	<?php
		$pages_dir = '.core/.data/.act';
		if(!empty($_GET['value'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			
			$p = $_GET['value'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo '				';
			}
		} else {
			include($pages_dir.'/edit_profil.php');
		}
	?>