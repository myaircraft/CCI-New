<?php
/** Fallback for any page without a dedicated template. */
get_header(); ?>
<main class="category-page"><div class="site-container section-space">
  <?php while (have_posts()) : the_post(); ?>
    <article><h1><?php the_title(); ?></h1><?php the_content(); ?></article>
  <?php endwhile; ?>
</div></main>
<?php get_footer();
