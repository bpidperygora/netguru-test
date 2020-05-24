<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="version" content="1.0.0"/>
    <meta name="language" content="<?php language_attributes(); ?>"/>
	<?php wp_head(); ?>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, user-scalable=0, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible"/>
    <meta name="theme-color" content="#243E95"/>
    <meta name="msapplication-navbutton-color" content="#243E95"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#243E95"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <!--    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">-->
    <!--    <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">-->
</head>

<body <?php body_class(); ?>>


<nav id="cssmenu" class="align-center">
    <div id="menu-button">Menu</div>
    <div class="menu">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'Main menu',
			'container'      => false,
			'fallback_cb'    => '__return_false',
			'items_wrap'     => '<ul class="parent_ul">%3$s</ul>',
		) );
		?>
    </div>
</nav>
