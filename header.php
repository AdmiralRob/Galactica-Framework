<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
	    <meta name="viewport" content="width=device-width" />
	    <meta name="application-name" content="<?php bloginfo('name'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>    
    

<body <?php body_class(); ?>>

<header class="bar">

    <div class="toppest-bar">
        <div class="row">
            <div class="medium-6 text-left sm-bar floatleft">
                <a href="" target="_blank"><i class="fa fa-facebook-square"></i></i></a>
                <a href="" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                <a href="" target="_blank"><i class="fa fa-envelope"></i></a>
            </div>
            <div class="medium-6 text-right floatright">
                <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                    <input type="text" size="18" value="<?php echo esc_html($s); ?>" name="s" id="s" placeholder="Search"></input>
                </form>
                <a href="tel:333-3333" class="topPhone"><strong><i class="fa fa-phone"></i> CALL TODAY </strong>333-3333</a>
    <!--		<div class="phonenav"><?php wp_nav_menu( array('theme_location' => 'phone' )); ?></div>-->
            </div>
        </div>
    </div>

    <div class="top-bar">
        <div class="header row">
            <div class="logo medium-3 column">
                <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="COMPANY NAME HERE" /></a>
            </div>
            <nav class="medium-9 column">
                <div class="mainnav"><?php wp_nav_menu( array('theme_location' => 'menu' )); ?></div>
            </nav>
        </div>
    </div>    
</header>

