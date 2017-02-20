<?php
$get = $_GET['id'];
$link = 'http://play.movieunlimited.us/?movie='.$get.';
?>
<html>
<head>
<title>Redirect</title> 
<meta http-equiv="refresh" content="0;url=<?php echo $link;?>">
<link rel="stylesheet" href="/include/css/style.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<style>body {padding-top: 70px;padding-bottom: 30px;}
.centered {position: fixed;top: 50%;left: 50%;margin-top: -200px;margin-left: -250px;border: 1px solid #DBDBDB;width: 500px;text-align: center;height: 225px;padding: 20px;font-size: 20px;background-color: rgba(233, 233, 233, 0.44);font-family: Arial, Helvetica, sans-serif;text-shadow: 1px 1px 1px #5F5F5F;}
</style>
</head>
<body>
<div class="centered">
<h2>Please Wait </h2>
You Are Automatic Redirecting<br>
To Secure Page<br><br>
<img src="/include/images/load.gif">
</div>
</body>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3409471,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3409471&101" alt="simple hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->

</html>
