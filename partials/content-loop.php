<?php
/**
 * X5: content-single
 *
 * The template for displaying content after all other content-{template}
 * Contains some basic HTML and WordPress functions that are quite common across
 * all projects
 *
 * For the moment equal to content-single
 */
?>

<?php
  //vars
  $fb = get_field('single_fb');
  $instagram = get_field('single_instagram');
 ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h3 class="entry-title"><a href="<?php echo esc_attr( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
  <div class="entry-meta">
    <abbr class="published"><?php the_time( 'j. F Y' ); ?></abbr>
  </div>
  <!-- HERE ->> blog-img-container -->
  <div class="blog-img-container">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
  </div>

  <div class="entry-content">
    <div class="flex">
      <div class="entry-padding">
        <?php the_excerpt(''); ?>
        <a href="<?php echo esc_attr( get_permalink() ); ?>" class="entry-more">Læs mere</a>
      </div>
      <div class="entry-aside">
        Private hjem<br/><br/>
        Tendenser i indretning<br/><br/>
        <small>by IndretNu</small>
        <div class="entry-icons">
          <?php if($fb): ?><a href="<?php echo $fb ?>"><i class="icon-facebook"></i></a><?php endif; ?>
          <?php if($instagram): ?><a href="<?php echo $instagram ?>"><i class="icon-instagram"></i></a><?php endif; ?>
        </div>
      </div>
    </div>

  </div>
  <!-- /.entry -->

</div>
<!-- / post -->

