<?php
  // vars
  $title = get_sub_field('w_title');
  $content = get_sub_field('w_content');
  $content2 = get_sub_field('w_content2');
  $leftCircle = get_sub_field('w_left_circle');
  $leftCircleImage = get_sub_field('w_left_circle_image');
  $rightCircle = get_sub_field('w_right_circle');
  $rightCircleImage = get_sub_field('w_right_circle_image');
  $tilesTitle = get_sub_field('w_tiles_title');
 ?>

<section class="what-tells">
  <div class="what-tells-container">
    <?php echo $title ? '<h2>'.$title.'</h2>' : '' ?>
    <div class="flex flex--start">
      <div class="small-column">
        <?php echo $content ?>
      </div>
      <!-- /.small-column -->
      <div class="small-column">
        <?php echo $content2 ?>
      </div>
      <!-- /.small-column -->
    </div>
    <!-- /.flex -->

    <?php echo $tilesTitle ? '<h3 class="what-title">'.$tilesTitle.'</h3>' : '' ?>

    <?php if( have_rows('w_tiles') ): ?>
      <div class="what-tiles">
      <?php while( have_rows('w_tiles') ): the_row();
        // vars
        $tileText = get_sub_field('w_tiles_title');
        $tileImage = get_sub_field('w_tiles_image');
        $tileColor = get_sub_field('w_tiles_color');
        ?>
        <?php if( $tileImage ): ?>
          <div class="what-tile <?php echo $tileColor ?>">
            <img data-src="<?php echo $tileImage ?>" alt="">
          </div>
        <?php else: ?>
          <div class="what-tile <?php echo $tileColor ?>">
            <div class="text-center center">
              <?php echo $tileText ?>
            </div>
          </div>
        <?php endif; ?>

      <?php endwhile; ?>
      </div>
      <!-- /.tiles -->
    <?php endif; ?>

  <?php if( $leftCircle ): ?>
    <a href="#erhvervsgalleri" data-target="#erhvervsgalleri" class="what-circle-left link-erhvers custom-target-link">
      <div class="text-center center">
        <?php echo $leftCircle ?>
      </div>
    </a>
  <?php endif; ?>
  <?php if( $leftCircleImage ): ?>
    <div class="what-circle-left2">
      <img data-src="<?php echo $leftCircleImage ?>" alt="">
    </div>
  <?php endif; ?>
    <div class="what-img"></div>
    <div class="what-icon">
      <i class="icon-share"></i>
    </div>
  <?php if( $rightCircleImage ): ?>
    <div class="what-circle">
      <img data-src="<?php echo $rightCircleImage ?>" alt="">
    </div>
  <?php endif; ?>
  <?php if( $rightCircle ): ?>
    <div class="what-circle2 link-section" data-target="#success">
      <div class="text-center center">
        <?php echo $rightCircle ?>
      </div>
    </div>
  <?php endif; ?>
  </div>
  <!-- /.what-tells-container -->
</section>
<!-- /.what-tells -->
