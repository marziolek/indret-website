<?php
/**
 * X5: Header
 *
 * Contains dummy HTML to show the default structure of WordPress header file
 *
 * Remember to always include the wp_head() call before the ending </head> tag
 *
 * Make sure that you include the <!DOCTYPE html> in the same line as ?> closing tag
 * otherwise ajax might not work properly
 *
 * @package WordPress
 * @subpackage X5
 */
?><!DOCTYPE html>
  <html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.min.css' ); ?>
    <?php // wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' ); ?>

    <!-- optional but recommended -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico?v1.0" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- /optional -->
    <?php
    // do not remove
    wp_head();
    $front_page_class = '';
    if (is_front_page()) {
      $front_page_class = ' is-front-page';
    }
	?>
  <script type="text/javascript">var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6168027-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
  </head>
  <body <?php body_class( 'no-js'. $front_page_class ); ?> <?php if (is_front_page()) : ?> data-spy="scroll" data-target="#navigation"  data-offset="70"<?php endif; ?>>

  <nav class="accessibility-nav">
    <ol>
      <li><a href="#navigation">Skip to navigation</a></li>
      <li><a href="#content">Skip to content</a></li>
    </ol>
  </nav>
  <!-- / accessibility-nav -->

  <div id="mask"></div>
  <div id="modal-mask"></div>
  <div class="modal modal-bordered">
    <div class="relative">
      <div class="modal-close"></div>
    </div>
    <div class="modal-cont">
    </div>
    <!-- /.modal-cont -->
  </div>
  <!-- / modal -->

  <?php
    // inspirations galleri
    $insTitle = get_field('inspiration_main_title', $id);
    $insSubtitle = get_field('inspiration_main_subtitle', $id);
    $insButtonText = get_field('inspiration_button_text', $id);
    $insButtonHref = get_field('inspiration_button_href', $id);
   ?>

  <div class="modal-gallery" id="inspirations-galleri">
    <div class="modal-close-container">
      <div class="modal-close"></div>
    </div>
    <div class="modal-cont">
      <div class="container">
        <div class="modal-masonry">

        </div>
        <!-- /.modal-masonry -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.modal-cont -->
  </div>
  <!-- / modal-gallery -->

  <div class="container">
    <div class="header-place"></div>
    <header class="header">
      <a href="/" rel="index" title="Go to homepage" class="logo-site"><span class="logo-text">Indret<small>nu</small></span></a>
      <nav class="navigation" id="navigation">
        <?php
          wp_nav_menu( array(
            'container'      => false,
            'menu'           => 'Top Navigation Menu',
            'items_wrap'     => '<ul class="nav">%3$s</ul>'
          ) );
        ?>
        <div class="btn-menu"></div>
      </nav>
      <!-- / navigation -->
    </header>
    <!-- / header -->
