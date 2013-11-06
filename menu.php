<?php

$querymenu = "SELECT `id_menu`, `nm_menu`, `link` FROM `menu`";
foreach ($db->iterate($querymenu) as $row) {
	$menus .= "\t\t<li><a href='".$row->link."'>".$row->nm_menu."</a></li>\n";
}

//$querylink = "SELECT `id_menu`, `nm_menu`, `link` FROM `link` ORDER BY `nm_menu`";
//foreach ($db->iterate($querylink) as $row) {
//	$links .= "\t\t<li><a href='".$row->link."'>".$row->nm_menu."</a></li>\n";
//}

?>
