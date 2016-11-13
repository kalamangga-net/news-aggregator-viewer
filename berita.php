<?php

$p = 20;
if($_GET['page']) {
 $x = (strval($_GET['page']) - 1);
 $hal = ($p * $x).", ".$p;
} else {
 $hal = "0, ".$p;
};

$query = "SELECT l.id, l.judul, l.tanggal, x.nama, x.link FROM link l LEFT JOIN xml x ON x.id=l.id_sindikasi ORDER BY id DESC LIMIT ".$hal;
foreach ($db->iterate($query) as $row) {
/*
	$text = preg_replace("/<img[^>]+\>/i", "", $row->ringkasan);
	$text = preg_replace("/<div[^>]+\>/i", "", $text);
        $text = preg_replace("/<table[^>]+\>/i", "", $text);
        $text = preg_replace("/<tr>/i", "", $text);
        $text = preg_replace("/<td[^>]+\>/i", "", $text);
        $text = preg_replace("/<\/tr>/i", "", $text);
        $text = preg_replace("/<\/td>/i", "", $text);
        $text = preg_replace("/<\/a>/i", "Link</a>", $text);
        $text = preg_replace("/<\/table>/i", "", $text);
        $text = preg_replace("/<\/div>/i", "", $text);
  	$text = preg_replace("(http://)", "http://adf.ly/238753/banner/", $text); */
	$link = str_replace(' ', '-', $row->judul);
	$link = str_replace(',', '', $link);
	$link = str_replace('&', '', $link);
	$link = str_replace('.', '', $link);
	$link = str_replace('?', '', $link);
	$link = str_replace(':', '', $link);
	$link = str_replace('!', '', $link);
	$link = str_replace('--', '-', $link);
	$link = strtolower($link);
	$news .= "<p>".$row->tanggal." - <a href='".$row->link."'>".$row->nama."</a>, <a href='/news/".$row->id."/".$link."'>".$row->judul."</a></p>\n";
}

?>
