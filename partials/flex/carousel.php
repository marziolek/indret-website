<?php
  // vars
  $title = get_sub_field('c_title');
  $content = get_sub_field('c_content');
  $id = get_sub_field('c_id');
  $bg = get_sub_field('c_background');
  $prev = uniqid();
  $next = uniqid();
 ?>

<div class="inspirations <?php echo $bg ? $bg : '' ?>" <?php echo $id ? 'id="'.$id.'"' : '' ?>>
  <?php echo $title ? '<h3>'.$title.'</h3>' : '' ?>
  <?php echo $content ? '<p>'.$content.'</p>' : '' ?>

  <?php if( have_rows('carousel') ): ?>

    <div class="relative">
      <div class="prev-carousel" id="prev-<?php echo $prev ?>">
        <i class="icon-arrow"></i>
      </div>
      <div class="next-carousel" id="next-<?php echo $next ?>">
        <i class="icon-arrow"></i>
      </div>
      <div class="carousel"
        data-cycle-prev=#prev-<?php echo $prev ?>
        data-cycle-next=#next-<?php echo $next ?>
      >

    <?php while( have_rows('carousel') ): the_row();
      // vars
      $image = get_sub_field('carousel_image');
      $productTitle = get_sub_field('carousel_title');
      $productSubtitle = get_sub_field('carousel_subtitle');
      $file = get_sub_field('carousel_pdf');
      ?>

      <a href="<?php echo $file; ?>" target="_blank" class="slide">
        <div class="slide-cont">
          <img data-src="<?php echo $image; ?>" alt="">
          <div class="cover"><b><?php echo $productTitle; ?></b><br/><?php echo $productSubtitle; ?></div>
        </div>
      </a>
      <!-- /.slide -->

    <?php endwhile; ?>
      </div>
    </div>

  <?php endif; ?>

</div>
