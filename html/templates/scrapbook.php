<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <base href="<?=str_replace('/index.php','',getURL('',true))?>" />
  <title>Scrap <?=$GLOBALS['sitename']?></title>

  <? head($head, $admin); ?>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/style.css?v=2">
  <script src="js/libs/modernizr-1.7.min.js"></script>

</head>

<body>

<?php if(isset($cms_topbar)){ echo "$cms_topbar\n"; } ?>

  <div id="container">
    <header>
    <h1><a href="/"><?=$GLOBALS['sitename']?></a></h1>
<div id="nav">
    <ul>
      <li><a href="<?=getURL()?>">Main</a></li>
    </ul>
  </div>
    </header>
    <div id="main" role="main">


<? showContent( $body ); ?>

<? showContent( $aside ); ?>

    </div>
    <footer>

    </footer>
  </div> <!-- eo #container -->


  <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script-->
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg");</script>
  <![endif]-->



  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>
