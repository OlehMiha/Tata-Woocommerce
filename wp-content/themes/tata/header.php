<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link href="/wp-content/themes/tata/css/tooltip-classic.css" type="text/css" rel="stylesheet"/>
    <link href="/wp-content/themes/tata/css/nouislider.css" type="text/css" rel="stylesheet"/>
    <link href="/wp-content/themes/tata/css/formstyler.css" type="text/css" rel="stylesheet"/>
    <link href="/wp-content/themes/tata/css/fancybox.css" type="text/css" rel="stylesheet"/>
    <link href="/wp-content/themes/tata/css/swiper.css" type="text/css" rel="stylesheet"/>
    <link href="/wp-content/themes/tata/css/style.css" type="text/css" rel="stylesheet"/>
    <link href="/wp-content/themes/tata/style.css" type="text/css" rel="stylesheet"/>
	<link href="/wp-content/themes/tata/css/mCustomScrollbar.css" type="text/css" rel="stylesheet"/>
    <link href="/wp-content/themes/tata/css/responsive.css" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ratings/rating.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
	</head>
<body>
<!--mob_nav-->
<div class="overlay"></div>
<div class="wrap_mob_nav">
    <button class="close_mob_nav"></button>
	            <form method="get" class="search" action="<?php echo home_url( '/' ); ?>">
                    <input type="search" class="tp_inp" data-swplive="true" id="search" name="s" placeholder="Умный поиск" />
                    <input type="submit" class="loupe" value="" />
                </form>
    <ul class="nav">
                    <?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'main', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
    </ul>
    <ul class="menu">
                    <?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'topheader', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
    </ul>
	<?php global $mytheme; ?>
    <div class="ftr_mobnav">
        <div class="working_call"><?php echo $mytheme['regim']; ?></div>
        <div class="phone">
            <a href="tel:<?php echo $mytheme['phone']; ?>"><span>+375 29</span> 321-33-33</a>
            <a href="tel:<?php echo $mytheme['phone2']; ?>"><span>+375 29</span> 321-35-35</a>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="wrap_content">
        <div class="top_header">
            <div class="container">
                <ul class="menu">
                    <?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'topheader', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
                </ul>
                <?php global $mytheme; ?>
				<div class="working_call"><?php echo $mytheme['regim']; ?></div>
                <a data-fancybox data-src="#modal_call" href="#" class="back_call">Обратный звонок</a>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <button class="open_mob_nav"></button>
                <a href="/" class="logo"><img src="/wp-content/themes/tata/img/logo.png" alt="" /></a>
                <form method="get" class="search" action="<?php echo home_url( '/' ); ?>">
                    <input type="search" class="tp_inp" data-swplive="true" id="search" name="s" placeholder="Умный поиск" />
                    <input type="submit" class="loupe" value="" />
                </form>
                <div class="phone">
                    <a href="tel:<?php echo $mytheme['phone']; ?>"><span>+375 29</span> 321-33-33</a>
                    <a href="tel:<?php echo $mytheme['phone2']; ?>"><span>+375 29</span> 321-35-35</a>
                </div>
                <div class="basket">
                    <p>Корзина<span><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></p>
                    <a href="/cart/">Оформить заказ</a>
                </div>
            </div>
        </div>
        <div class="wrap_nav">
            <div class="container">
                <ul class="nav">
                    <?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'main', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '%3$s',
	'depth'           => 0,
	'walker'          => '',
) ); ?>
                </ul>
            </div>
        </div>