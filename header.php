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
        <hgroup>
            <a class="banner" href="/"><h1 class="icon-logo">Voce Angeli</h1></a>
            <h2>Chór śpiewający przy Bazylice Franciszkanów w&nbsp;Krakowie</h2>
        </hgroup>
        <a href="#mainNav" class="toggle-nav icon-list">Przejdź do menu</a>
    </header>

    <nav class="main-menu" role="navigation" id="mainNav">
        <ul class="list">
         <li class="active"><a class="f-level" href="/">strona główna</a></li>
         <li><a class="f-level" href="/o-nas/">o nas</a>
             <ul class="items-5">
                <li><a href="/o-nas/">O nas</a></li>
                <li><a href="/sklad-osobowy/">Skład osobowy</a></li>
                <li><a href="/kronika/">Kronika</a></li>
                <!--<li><a href="/kalendarium">Kalendarium</a></li>-->
                <li><a href="/kontakt/">Kontakt</a></li>
             </ul>
         </li>
         <li><a class="f-level" href="/category/nagrania/">nagrania</a>
            <ul class="items-3">
                <li><a href="/category/utwory/">Audio</a></li>
                <li><a href="/category/wideo/">Wideo</a></li>
                <li><a href="/category/galeria/plyty">Płyty i publikacje</a></li>
             </ul>
         </li>
         <li><a class="f-level" href="/category/galeria/">galeria</a>
            <ul class="items-2">
                <li><a href="/category/galeria/galeria-zdjec/">Zdjęcia</a></li>
                <li><a href="/category/galeria/plakaty">Plakaty</a></li>
             </ul>
         </li>
         <li><a class="f-level" href="/category/ciekawostki/">ciekawostki</a></li>
         <li><a class="f-level" href="/przyjaciele">przyjaciele</a></li>
        </ul>
        <a href="#top" class="toggle-nav icon-close">Zamknij menu</a>
    </nav>

    <div class="body clear">

	<div class="main-content" role="main">