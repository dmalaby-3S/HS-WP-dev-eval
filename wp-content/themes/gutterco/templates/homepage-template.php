<?php
/*
Template Name: Gutterco Homepage Template
*/

get_header(); // This pulls in your header.php file
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1><?php echo esc_html(get_field('hero_headline')); ?></h1>
            <p><?php echo esc_html(get_field('hero_description')); ?></p>
            <button type="button" class="hero-button"><?php echo esc_html(get_field('hero_button_text')); ?></button>
        </div>

        <?php
        // Hero Image
        $hero_image_url = get_field('hero_image_url');
        if ($hero_image_url): ?>
            <div class="hero-image" style="background-image: url(<?php echo esc_url($hero_image_url); ?>);"></div>
        <?php endif; ?>
    </section>

</main>

<?php
get_footer(); // This pulls in your footer.php file
?>