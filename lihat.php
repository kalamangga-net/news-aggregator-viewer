<?php
if($_GET['id']) {
 include("konfigurasi.php");
 $query = "SELECT judul,link,ringkasan FROM link WHERE id =".$_GET['id'].";";
 foreach ($db->iterate($query) as $row) {
	$text = preg_replace("/<img[^>]+\>/i", "", $row->ringkasan);
	$text = preg_replace("(http://)", "http://adf.ly/238753/banner/", $text);
	$link = preg_replace("(http://)", "http://adf.ly/238753/banner/", $row->link);
	$judul = $row->judul;
 }
} else {
 $text = "Nothing found";
 $link = "http://www.kalamangga.com";
 $judul = "Nothing found";
}
include("menu.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo($judul); ?> | Kalamangga.Com</title>
<meta name="generator" content="Kalamangga.Net" />
<link href="/css/inti.css" rel="stylesheet" type="text/css" />
<link rel="canonical" href="http://www.b2b.web.id/" />
<meta name="Author" content="Kalamangga.Net" />
<meta name="keywords" lang="en-us" content="Kalamangga, Detik, Kompas, TribunNews, Sumatera Ekspres, Portal, Berita, News, WN.Com, BBC.Co.UK" />
<meta name="keywords" lang="id-ID" content="Kalamangga, Detik, Kompas, TribunNews, Sumatera Ekspres, Portal, Berita, News, WN.Com, BBC.Co.UK" />
<meta name="description" content="<?php echo(substr($text,0,100)); ?> ...[more]..." />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
</head>
<body>

<div id="header">Kalamangga.Com - News Portal, News Agregator</div>
<div id="aplikasi">
  <div id="menu">
    <?php echo("<ul>".$menus."</ul>"); ?>
  </div>
  <div id="link">
    <?php echo("<ul>\n".$links."\t</ul>"); ?>
  </div>
 </div>
 <div id="content">
  <?php echo("<h2>".$judul."</h2>"); ?>
  <?php echo("<p>".$text." <a href='".$link."'>... [more] ...</a></p>"); ?>
 </div>
</div>

<g:plusone size="small"></g:plusone>

<div id="footer">Kalamangga.Com - News Portal, News Agregator<br />Hak Cipta © 2011 - 2012</div>

</body>
</html>
