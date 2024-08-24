<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
        // Check for custom logo
        if (has_custom_logo()) {
            the_custom_logo();
        }
        ?>
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <?php the_title(); ?>
            </a>
        </h1>
    </div><!-- .site-branding -->
    
    <div id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="menu">%3$s</ul>'
            )
        );
        ?>
    </div><!-- #site-navigation -->
</header><!-- #masthead -->

<div id="content" class="site-content">
    <div class="container"></div>