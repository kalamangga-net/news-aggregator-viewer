<?php
include("konfigurasi.php");
include("menu.php");
include("cariberita.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>50 berita terakhir mengenai '%<?php echo($_GET['q']); ?>%' - Kalamangga.Com - News Portal, News Agregator</title>
<meta name="generator" content="Kalamangga.Net" />
<link href="/css/inti.css" rel="stylesheet" type="text/css" /> 
<link rel="canonical" href="http://www.kalamangga.com/" />
<meta name="Author" content="Kalamangga.Net" /> 
<meta name="keywords" lang="en-us" content="Kalamangga, Detik, Kompas, TribunNews, Sumatera Ekspres, Portal, Berita, News, WN.Com, BBC.Co.UK" /> 
<meta name="keywords" lang="id-ID" content="Kalamangga, Detik, Kompas, TribunNews, Sumatera Ekspres, Portal, Berita, News, WN.Com, BBC.Co.UK" /> 
<meta name="description" content="50 berita terakhir mengenai '%<?php echo($_GET['q']); ?>%' - Kalamangga.Com - News Portal, News Agregator - Alpha3 Release" /> 
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
</head>
<body>

<div id="header">Kalamangga.Com - News Portal, News Agregator</div>    
<div id="aplikasi"> 
 <div id="left">
  <div id="menu"> 
    <?php echo("<ul>".$menus."</ul>"); ?> 
  </div>    
  <div id="link"> 
    <?php echo("<ul>".$links."</ul>"); ?> 
  </div>
 </div>    
 <div id="content">
    <h2>50 berita terakhir mengenai '%<?php echo($_GET['q']); ?>%'</h2>
    <?php echo($news); ?>
  </div> 
</div> 
<div id="footer">Kalamangga.Com - News Portal, News Agregator<br />Hak Cipta © 2011 - 2012</div>    

<g:plusone size="small"></g:plusone>

<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.kalamangga.net/" : "http://piwik.kalamangga.net/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.kalamangga.net/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>
</html>
