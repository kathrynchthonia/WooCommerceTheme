<?php get_header(); ?>

<main class="main-content">
    <h1 class="error-title">404 - Page Not Found</h1>
    <p>The page you are looking for could not be found. Please check the URL or go back to the home page.</p>
    <a href="<?php echo home_url(); ?>" class="home-link">Go to Home Page</a>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>