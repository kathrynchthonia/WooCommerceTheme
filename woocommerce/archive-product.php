<?php
get_header('shop');
?>

<main class="site-main" role="main">
    <?php
    if (woocommerce_product_loop()) {
        woocommerce_product_loop_start();
        if (wc_get_loop_prop('total')) {
            while (have_posts()) {
                the_post();
                wc_get_template_part('content', 'product');
            }
        }
        woocommerce_product_loop_end();
    } else {
        do_action('woocommerce_no_products_found');
    }
    ?>
</main>

<?php
get_sidebar('shop');
get_footer('shop');
?>