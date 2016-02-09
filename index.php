<?php
include("konfigurasi.php");
include("menu.php");
include("berita.php");

$pages = "";
for($i=1;$i<=20;$i++) { $pages .= "| <a href=\"/page/".$i."\">".$i."</a> |"; };

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Kalamangga.Com - News Portal, News Agregator</title>
<meta name="generator" content="Kalamangga.Net" />
<link href="/css/inti.css" rel="stylesheet" type="text/css" /> 
<link rel="canonical" href="http://www.kalamangga.com/" />
<meta name="Author" content="Kalamangga.Net" /> 
<meta name="keywords" lang="en-us" content="Kalamangga, Detik, Kompas, TribunNews, Sumatera Ekspres, Portal, Berita, News, WN.Com, BBC.Co.UK" /> 
<meta name="keywords" lang="id-ID" content="Kalamangga, Detik, Kompas, TribunNews, Sumatera Ekspres, Portal, Berita, News, WN.Com, BBC.Co.UK" /> 
<meta name="description" content="Kalamangga.Com - News Portal, News Agregator - Alpha3 Release" /> 
</head>
<body>

<div id="header">Kalamangga.Com - News Portal, News Agregator</div>    
<div id="aplikasi"> 
 <div id="left">
  <div id="menu"> 
    <?php echo("<ul>\n".$menus."\t</ul>"); ?> 
  </div>
  <div id="link"> 
    <?php echo("<ul>\n".$links."\t</ul>"); ?> 
  </div>
 </div>
 <div id="content"> 
  <?php echo($news); ?>
  <?php echo("<p>".$pages."</p>"); ?> 
 </div> 
</div> 
<div id="footer">Kalamangga.Com - News Portal, News Agregator<br />Hak Cipta © 2011 - 2016</div>    

</body>
</html>
