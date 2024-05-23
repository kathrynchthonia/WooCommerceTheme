<?php
get_header('shop');
?>

<main id="main" class="site-main" role="main">
    <?php
    while (have_posts()) {
        the_post();
        wc_get_template_part('content', 'single-product');
    }
    ?>
</main>

<?php
get_sidebar('shop');
get_footer('shop');
?>