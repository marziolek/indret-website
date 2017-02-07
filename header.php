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

    <?php wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' ); ?>

    <!-- optional but recommended -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico?v1.0" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!-- /optional -->
    <?php
	// do not remove
	wp_head();
	?>
  </head>
  <body <?php body_class( 'no-js' ); ?>>

  <nav class="accessibility-nav">
    <ol>
      <li><a href="#navigation">Skip to navigation</a></li>
      <li><a href="#content">Skip to content</a></li>
    </ol>
  </nav>
  <!-- / accessibility-nav -->

  <div id="mask"></div>
  <div id="modal-mask"></div>
  <div class="modal">
    <div class="relative">
      <div class="modal-close"></div>
    </div>
    <div class="modal-cont">
    </div>
    <!-- /.modal-cont -->
  </div>
  <!-- / modal -->

  <?php
    // vars galleri
    $id = 1865; // id of home page

    // erhvervs galleri
    $galTitle = get_field('gal_title', $id);
    $galSubtitle = get_field('gal_subtitle', $id);
    $galUniq = uniqid();
    $galLinkText = get_field('gal_link_text', $id);
    $galLinkHref = get_field('gal_link_href', $id);
   ?>

  <div class="modal-gallery" id="erhvervs-galleri">
    <div class="modal-close-container">
      <div class="modal-close"></div>
    </div>
    <div class="modal-cont">
      <div class="container">
        <div class="modal-masonry">
          <div>
            <?php echo $galTitle ? '<h3>'.$galTitle.'</h3>' : '' ?>
            <?php echo $galSubtitle ? '<h4>'.$galSubtitle.'</h4>' : '' ?>
          </div>
          <?php if( have_rows('gal_gallery', $id) ): ?>
            <?php while( have_rows('gal_gallery', $id) ): the_row();
              // vars
              $galImage = get_sub_field('gal_gallery_image', $id);
              $galSize = get_sub_field('gal_gallery_size', $id);
              $galFullImage = get_sub_field('gal_gallery_image_full', $id) ? get_sub_field('gal_gallery_image_full', $id) : $galImage;
              ?>

              <div>
               <a href="<?php echo $galFullImage ?>" data-lightbox="gallery-<?php echo $galUniq ?>">
                 <img style="max-width: <?php echo $galSize ?>" src="<?php echo $galImage ?>" alt="">
               </a>
              </div>

            <?php endwhile; ?>
          <?php endif; ?>

        </div>
        <!-- /.modal-masonry -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.modal-cont -->
  </div>
  <!-- / modal-gallery -->

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

  <?php
    // vars boliggalleri
    $gal2Title = get_field('gal2_title', $id);
    $gal2Subtitle = get_field('gal2_subtitle', $id);
    $gal2Uniq = uniqid();
    $gal2LinkText = get_field('gal2_link_text', $id);
    $gal2LinkHref = get_field('gal2_link_href', $id);
   ?>

  <div class="modal-gallery" id="bolig-galleri">
   <div class="modal-close-container">
     <div class="modal-close"></div>
   </div>
   <div class="modal-cont">
     <div class="container">
       <div class="modal-masonry">
         <div>
           <?php echo $gal2Title ? '<h3>'.$gal2Title.'</h3>' : '' ?>
           <?php echo $gal2Subtitle ? '<h4>'.$gal2Subtitle.'</h4>' : '' ?>
         </div>
         <?php if( have_rows('gal2_gallery', $id) ): ?>
           <?php while( have_rows('gal2_gallery', $id) ): the_row();
             // vars
             $gal2Image = get_sub_field('gal2_gallery_image', $id);
             $gal2Size = get_sub_field('gal2_gallery_size', $id);
             $gal2FullImage = get_sub_field('gal2_gallery_image_full', $id) ? get_sub_field('gal2_gallery_image_full', $id) : $gal2Image;
             ?>

             <div>
              <a href="<?php echo $gal2FullImage ?>" data-lightbox="gallery-<?php echo $gal2Uniq ?>">
                <img style="max-width: <?php echo $gal2Size ?>" src="<?php echo $gal2Image ?>" alt="">
              </a>
             </div>

           <?php endwhile; ?>
         <?php endif; ?>

       </div>
       <!-- /.modal-masonry -->
     </div>
     <!-- /.container -->
   </div>
   <!-- /.modal-cont -->
  </div>
  <!-- / modal-gallery -->

  <?php
  // vars billedgalleri
  $gal3Content = get_field('gal3_content', $id);
  $gal3Circle = get_field('gal3_circle', $id);
  $gal3MainTitle = get_field('gal3_tiles_main_title', $id);
  $gal3CircleImage = get_field('gal3_circle_image', $id);
   ?>

  <div class="modal-gallery" id="billed-galleri">
    <div class="modal-close-container">
      <div class="modal-close"></div>
    </div>
    <div class="modal-cont">
      <div class="billed-container">
        <div class="billed-cont">
          <div class="billed-desc">
            <?php echo $gal3Content ?>
          </div>
          <!-- /.billed-desc -->
          <div class="big-circle">
            <img src="<?php echo $gal3CircleImage ?>" alt="">
          </div>
          <!-- /.big-circle -->
          <div class="button-circle link-bolig">
            <div class="text-center center">
              <?php echo $gal3Circle ?>
            </div>
          </div>
          <!-- /.button-circle -->
        </div>
        <!-- /.billed-cont -->

        <div id="billed-tiles">
          <h3 class="what-title"><?php echo $gal3MainTitle ?></h3>

         <?php if( have_rows('gal3_tiles', $id) ): ?>

            <div class="what-tiles">

            <?php while( have_rows('gal3_tiles', $id) ): the_row();
              // vars
              $gal3TileTitle = get_sub_field('gal3_tiles_title', $id);
              $gal3TileContent = get_sub_field('gal3_tiles_content', $id);
              $gal3TileBackground = get_sub_field('gal3_tiles_background', $id);
              ?>

              <div class="what-tile <?php echo $gal3TileBackground ?>">
                <div class="text-center center">
                  <h4><?php echo $gal3TileTitle ?></h4>
                  <p><?php echo $gal3TileContent ?></p>
                </div>
              </div>

            <?php endwhile; ?>
            </div>
            <!-- /.what-tiles -->

          <?php endif; ?>

        </div>
        <!-- /#billed-tiles -->
      </div>
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
            'menu' => 'Top Navigation Menu',
            'menu_id'        => '',
            'menu_class'     => '',
            'items_wrap'     => '<ul>%3$s</ul>'
          ) );
        ?>
        <div class="btn-menu"></div>
      </nav>
      <!-- / navigation -->
    </header>
    <!-- / header -->
