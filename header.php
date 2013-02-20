<?php
if (!is_user_logged_in()) {
    if (strpos($_SERVER['REQUEST_URI'],'/category/pliki')===0){
      header('Location: /');
      die();
    }
}
?><!DOCTYPE html>
<html>
<head>
<meta charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; blog archive <?php } ?> <?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="generator" content="wordpress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> rss feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div class="page">
    <div class="inner-wrap">

<header class="main-header" id="top" role="banner">
    <a class="banner" href="/">
        <hgroup>
            <h1>Voce Angeli</h1>
            <h2>Chór śpiewający przy Bazylice Franciszkanów w Krakowie</h2>
        </hgroup>
    </a>
    <a href="#mainNav" class="toggle-nav open">Przejdź do menu</a>
</header>    
<nav class="main-menu clear" role="navigation" id="mainNav">
    <ul class="list">
     <li class="active"><a href="/">strona główna</a></li>
     <li><a href="/o-nas/">o nas</a>
         <ul>
            <li><a href="/o-nas/">O nas</a></li>
            <li><a href="/sklad-osobowy/">Skład osobowy</a></li>
            <li><a href="/kronika/">Kronika</a></li>
            <li><a href="/kalendarium">Kalendarium</a></li>    
            <li><a href="/kontakt/">Kontakt</a></li>    
         </ul>
     </li>
     <li><a href="/category/nagrania/">nagrania</a>
        <ul>
            <li><a href="/category/utwory/">Audio</a></li>
            <li><a href="/category/wideo/">Wideo</a></li>
            <li><a href="/category/galeria/plyty">Płyty i publikacje</a></li>   
         </ul>
     </li>
     <li><a href="/category/galeria/">galeria</a>
        <ul>
            <li><a href="/category/galeria/galeria-zdjec/">Zdjęcia</a></li>
            <li><a href="/category/galeria/plakaty">Plakaty</a></li>    
         </ul>
     </li>
     <li><a href="/category/ciekawostki/">ciekawostki</a></li>
     <li><a href="/przyjaciele">przyjaciele</a></li>
    </ul>
    <a href="#top" class="toggle-nav close">Przejdź na górę</a>
</nav>

<div class="body">

	<div class="main-content" role="main">
    	<div class="StrefaVA"><?php if (is_user_logged_in()) {
      $user_info = get_userdata(1);
      echo('<a href="/category/pliki/">');}?><em>strefa va</em><?php if (is_user_logged_in()) { echo('</a><span>witaj '.$user_info->user_login.'!</span>');}?></div>    	
