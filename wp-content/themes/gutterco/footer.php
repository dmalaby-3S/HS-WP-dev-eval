<?php
/**
 * The template for displaying the footer
 *
 * @package YourThemeName
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'your-theme-textdomain' ) ); ?>">
                <?php printf( esc_html__( 'Proudly powered by %s', 'your-theme-textdomain' ), 'WordPress' ); ?>
            </a>
            <span class="sep"> | </span>
            <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'your-theme-textdomain' ), 'Your Theme Name', '<a href="your-website.com">Your Name</a>' ); ?>
        </div><!-- .site-info -->

        <?php
        // Optional: Add footer widget areas
        if ( is_active_sidebar( 'footer-1' ) ) {
            dynamic_sidebar( 'footer-1' );
        }
        ?>

        <nav class="footer-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'menu_id'        => 'footer-menu',
            ) );
            ?>
        </nav><!-- .footer-navigation -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>