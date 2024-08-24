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
    <div class="container">
        <div class="site-branding">
            <?php
            // Check for custom logo
            if (has_custom_logo()) {
                the_custom_logo();
            }
            ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => 'default_menu'
            ));

            // Fallback function if no menu is set
            function default_menu() {
                echo '<ul id="primary-menu" class="menu">';
                echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
                echo '<li><a href="' . esc_url(home_url('/about')) . '">About</a></li>';
                echo '<li><a href="' . esc_url(home_url('/services')) . '">Services</a></li>';
                echo '<li><a href="' . esc_url(home_url('/contact')) . '">Contact</a></li>';
                echo '</ul>';
            }
            ?>
        </nav><!-- #site-navigation -->
    </div><!-- .container -->
</header><!-- #masthead -->

<div id="content" class="site-content">
    <div class="container">