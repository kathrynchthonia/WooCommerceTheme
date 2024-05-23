<?php get_header(); ?>

<main class="main-content">
    <section class="hero">
        <h1>Welcome to Our Store</h1>
        <p>Find the best products for your needs</p>
        <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>" class="cta-button">Shop Now</a>
    </section>

    <!-- Add your product listings here -->

</main>

<?php get_footer(); ?>