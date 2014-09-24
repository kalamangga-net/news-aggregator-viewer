<?php
$querymenu = "SELECT `id_menu`, `nm_menu`, `link` FROM `menu`";
foreach ($db->iterate($querymenu) as $row) {
	$menus .= "\t\t<li><a href='".$row->link."'>".$row->nm_menu."</a></li>\n";
}
?>
