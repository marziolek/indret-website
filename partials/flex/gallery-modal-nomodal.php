<?php
// vars billedgalleri
$gal3Content = get_field('gal3_content', $id);
$gal3Circle = get_field('gal3_circle', $id);
$gal3MainTitle = get_field('gal3_tiles_main_title', $id);
$gal3CircleImage = get_field('gal3_circle_image', $id);
if (strpos($gal3CircleImage, 'uploads') === false) {
  $gal3CircleImage = wp_get_attachment_image_src($gal3CircleImage, 'full');
  $gal3CircleImage = $gal3CircleImage[0];
}
?>

<section class="billed-galleri" id="billed-galleri">
  <div class="billed-container">
    <h3 class="what-title"><?php echo $gal3MainTitle ?></h3>
    <div class="billed-cont">
      <div class="billed-desc">
        <?php echo $gal3Content ?>
      </div>
      <!-- /.billed-desc -->
      <div class="big-circle">
        <img data-src="<?php echo $gal3CircleImage; ?>" alt="">
      </div>
      <!-- /.big-circle -->
      <a href="#boliggalleri" data-target="#boliggalleri" class="button-circle link-bolig custom-target-link">
        <div class="text-center center">
          <?php echo $gal3Circle ?>
        </div>
      </a>
      <!-- /.button-circle -->
    </div>
    <!-- /.billed-cont -->

    <div class="billed-tiles">

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
</section>
<!-- / gallery-modal-nomodal -->