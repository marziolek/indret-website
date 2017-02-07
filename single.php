<?php
/*
 * X5: Post
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
the_post();
?>
<div class="grid-blog">
  <div class="left-cont">
    <?php get_template_part( 'partials/content-single' ); ?>
  </div>
  <div class="sidebar-cont">
    <?php get_sidebar(); ?>
  </div>
  <!-- /.sidebar-cont -->
</div>
<?php get_footer();
