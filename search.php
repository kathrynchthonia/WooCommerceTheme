<?php get_header(); ?>

<main class="main-content">
    <h1 class="search-title">Search Results for: <?php echo get_search_query(); ?></h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; else : ?>
        <p>No results found for <?php echo get_search_query(); ?></p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>