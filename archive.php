<?php
/**
 * X5: Archive page
 *
 * Archive page lists all posts belonging to monthly / weekly / daily archives
 * it's a good idea to have a drawback method in case no posts were found
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
?>

<?php // print archive info here (posts found)  ?>

<?php if ( have_posts() ) : ?>
<div class="grid-blog">
  <div class="left-cont">
  	<?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'partials/content', 'loop' ); ?>

  	<?php endwhile; ?>
  </div>
  <?php else : ?>

  	<?php // print empty info here (no posts found)  ?>

  <?php endif; ?>

  <?php // add pagination if needed here  ?>
  <div class="sidebar-cont">
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- /.grid-blog -->
<?php get_footer();
