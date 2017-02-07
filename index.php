<?php
/**
 * X5: Index
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
?>

<?php if ( have_posts() ) : ?>

  <?php // print archive info here (posts found)  ?>

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'loop' ); ?>

    <?php endwhile; ?>

  <?php else : ?>

    <?php // print empty archive info here (no posts found)  ?>

  <?php endif; ?>

  <?php // add pagination if needed here  ?>

  <?php get_sidebar(); ?>
  <?php get_footer();
