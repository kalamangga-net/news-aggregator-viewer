<?php

$query = "SELECT id,judul,rangkuman,tanggal FROM berita WHERE rangkuman LIKE '%".$_GET['q']."%' ORDER BY id DESC LIMIT 50;";
foreach ($db->iterate($query) as $row) {
	$text = preg_replace("/<img[^>]+\>/i", "", $row->rangkuman);
	$text = preg_replace("(http://)", "http://adf.ly/238753/banner/", $text);
	$link = str_replace(' ', '-', $row->judul);
	$link = str_replace(',', '', $link);
	$link = str_replace('&', '', $link);
	$link = str_replace('.', '', $link);
	$link = str_replace('?', '', $link);
	$link = str_replace(':', '', $link);
	$link = str_replace('!', '', $link);
	$link = str_replace('--', '-', $link);
	$link = strtolower($link);
	$news .= "<p><a href='/news/".$row->id."/".$link."'>".$row->judul."</a><br />".$row->tanggal." - ".$text."</p>\n";
}

?>