<?php
	$query = "SELECT id,name,rank,score,(score/(time/60)) as spm, (kills/deaths) as kdr, time, country FROM player WHERE name LIKE '$SEARCHVALUE' OR name LIKE ' $SEARCHVALUE' OR id = '$SEARCHVALUE' ORDER BY score DESC LIMIT 30;";
?>