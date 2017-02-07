<?php

/*
 * X5: Page
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
the_post();
?>

<?php get_template_part( 'partials/flexible' ); ?>
<?php get_template_part( 'partials/content-page' ); ?>

<?php get_footer();
