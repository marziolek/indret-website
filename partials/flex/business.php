<?php
  // vars
  $title = get_sub_field('b_title');
  $content = get_sub_field('b_content');
  $number = 1;
  $gallery1 = get_sub_field('b_gal_1');
  $gallery2 = get_sub_field('b_gal_2');
  $gallery3 = get_sub_field('b_gal_3');
  $textSquare = get_sub_field('b_text_square');
 ?>

<section class="business" id="erhverv">
  <div class="business-cont">
    <div class="business-text">
      <?php echo $title ? '<h2>'.$title.'</h2>' : '' ?>
      <?php echo $content ? $content : '' ?>
    </div>

    <?php if( have_rows('b_circles') ): ?>

      <div class="business-tiles">

      <?php while( have_rows('b_circles') ): the_row();

        // vars
        $titleCircle = get_sub_field('b_circles_title');
        $contentCircle = get_sub_field('b_circles_content');

        ?>

        <div class="business-tile pos-<?php echo $number ?>">
          <div class="business-tile-cont">
            <div class="center text-center">
              <?php echo $titleCircle ?>
            </div>
          </div>
          <div class="relative">
            <div class="business-tooltip">
              <div class="center">
                <h4><?php echo $titleCircle ?></h4>
                <p><?php echo $contentCircle ?></p>
              </div>
              <!-- /.center -->
            </div>
            <!-- /.business-tooltip -->
          </div>
        </div>
        <!-- /.business-tile -->

      <?php $number++;endwhile; ?>

      </div>
      <!-- /.business-tiles -->

    <?php endif; ?>

  </div>
  <!-- /.business-cont -->

<?php if( $textSquare ): ?>
  <a href="#gallery-erhvervsgalleri" data-target="#gallery-erhvervsgalleri" class="section-tile section-tile--teal link-erhvers custom-target-link">
    <div class="section-icon section-icon--text">
      <i class="icon-square"></i>
    </div>
    <div class="text-center">
      <?php echo $textSquare ?>
    </div>
  </a>
  <!-- /.section-tile -->
<?php endif; ?>

  <div class="business-gallery">
    <?php echo $gallery1 ? '<img src="'.$gallery1.'" alt="" />' : '' ?>
    <?php echo $gallery2 ? '<img src="'.$gallery2.'" alt="" />' : '' ?>
    <?php echo $gallery3 ? '<img src="'.$gallery3.'" alt="" />' : '' ?>
  </div>
  <!-- /.business-gallery -->

</section>
<!-- /.business -->
