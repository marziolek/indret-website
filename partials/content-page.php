<?php
/**
 * X5: content-single
 *
 * The template for displaying content after all other content-{template} files
 * were either not used or not found, see:
 * http://codex.wordpress.org/Function_Reference/get_template_part
 *
 * @package WordPress
 * @subpackage X5
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="content"> <?php the_content(); ?></div>

</div>
<!-- / post -->
