<?php
  // vars
  $title = get_sub_field('intro_title');
  $content = get_sub_field('intro_content');
  $image = get_sub_field('intro_image');
 ?>

<section class="intro">
  <?php echo $title ? '<h2>'.$title.'</h2>' : '' ?>
  <?php echo $content ? '<p class="intro-desc">'.$content.'</p>' : '' ?>

  <?php if( have_rows('intro_gallery') ): ?>

    <div class="intro-gallery masonry">

    <?php while( have_rows('intro_gallery') ): the_row();
      // vars
      $image = get_sub_field('intro_image');
      $margin = get_sub_field('intro_margin');
      $slider = get_sub_field('intro_slider_switch');
      $html = get_sub_field('intro_html');
      $pager = uniqid();
      ?>

      <?php if( $html ): ?>
        <?php echo $html ?>
      <?php else: ?>

        <?php if( $slider ): ?>

            <?php if( have_rows('intro_slider') ): ?>

              <div <?php echo $margin ? 'style="margin-top: '.$margin.'px;"' : '' ?> class=" cycle-slideshow"
                data-cycle-timeout=2500
                data-cycle-swipe=true
                data-cycle-swipe-fx=scrollHorz
                data-cycle-pager=".pager-<?php echo $pager ?>"
              >
                <div class="cycle-pager pager-<?php echo $pager ?>"></div>

              <?php while( have_rows('intro_slider') ): the_row();
                // vars
                $imageSlider = get_sub_field('intro_slider_image');
                ?>

                <img data-src="<?php echo $imageSlider ?>" alt="">

              <?php endwhile; ?>
              </div>
              <!-- /.slider -->

            <?php endif; ?>

        <?php else: ?>
          <div <?php echo $margin ? 'style="margin-top: '.$margin.'px;"' : '' ?>>
            <img data-src="<?php echo $image ?>" alt="">
          </div>
        <?php endif; ?>

      <?php endif; ?>

    <?php endwhile; ?>
    </div>
    <!-- /.gallery -->

  <?php endif; ?>

</section>
<!-- /.intro -->
