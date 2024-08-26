<?php
/**
 * The template for displaying the footer
 *
 * @package YourThemeName
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-brand">
                <h1>Roofing Inc</h1>
                <p>Expert Roofing Solutions</p> 
            </div>

            <div id="site-navigation" class="footer-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Footer Menu',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="menu">%3$s</ul>'
                    )
                );
                ?>
            </div><!-- #site-navigation -->
           
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>