<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Spacelab Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Test Homepage">
    <meta name="author" content="Semih Onay">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

    <link href="/Themes/Spacelab/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">


  <!-- Navbar
    ================================================== -->
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="http://192.168.1.195">Pi@Home</a>
       <div class="nav-collapse collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">
          <li><a href="showMe.php">Show Me On Map Now!</a></li>
          <li><a href="../tables.php">Database Table</a></li>
          <li><a href="../#about">About</a></li>
          <li><a id="swatch-link" href="/liveStream/">Live Camera Stream</a></li>
              <!--<li class="divider"></li>-->
            </ul>
          </li>
        </ul>
        <ul class="nav pull-right" id="main-menu-right">
          <li><a href="/admin/admin.php">Admin</a></li>
        </ul>
       </div>
     </div>
   </div>
 </div>
    <br>
    <br>
    <br>
    <br>
<center><iframe width="720" height="480" src="http://192.168.1.195:8080/?action=stream" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0">
</iframe></center>
</br>
<center><body>
LED Control:
<form method="get" action="/liveStream/index.php">
        <input type="submit" class="btn btn-info" value="ON" name="on">
        <input type="submit" class="btn btn-warning" value="OFF" name="off">
</form>
<?php
$setmode22 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
if(isset($_GET['on'])){
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 22 0");
}
else if(isset($_GET['off'])){
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 22 1");
}
?>
</body></center>
</br>
</br>
</br>
<!-- Footer
 ================================================== -->
 <hr>
 <footer id="footer">
   <p class="pull-right"><a href="#top">Back to top</a></p>
   Made by <a href="http://semyonic.github.io" rel="nofollow">Semih Onay</a><script data-cfhash='f9e31' type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("data-cfhash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}t.parentNode.removeChild(t);}}catch(u){}}()/* ]]> */</script></a>.<br/>
   Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow">Apache License v2.0</a>.<br/>
   Based on <a href="http://getbootstrap.com/2.3.2/" rel="nofollow">Bootstrap</a>. Hosted on <a href="http://pages.github.com/" rel="nofollow">GitHub</a>. Icons from <a href="http://fortawesome.github.com/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>
 </footer>
 </body>
</html>
