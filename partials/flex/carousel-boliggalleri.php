<?php
  // vars
  $title = get_sub_field('c_b_title');
  $content = get_sub_field('c_b_content');
  $id = get_sub_field('c_b_id');
  $bg = get_sub_field('c_b_background');
  $prev = uniqid();
  $next = uniqid();
  $galleryUniq = uniqid();
 ?>

<div id="boligalleri" class="inspirations <?php echo $bg ? $bg : '' ?>" <?php echo $id ? 'id="'.$id.'"' : '' ?>>
  <?php echo $title ? '<h3>'.$title.'</h3>' : '' ?>
  <?php echo $content ? '<p>'.$content.'</p>' : '' ?>

  <?php if( have_rows('b_carousel') ): ?>

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

    <?php while( have_rows('b_carousel') ): the_row();
      // vars
      $image = get_sub_field('carousel_image');
      $productTitle = get_sub_field('carousel_title');
      $productSubtitle = get_sub_field('carousel_subtitle');
      
      $imageSrcThumb = wp_get_attachment_image_src($image, 'slider-thumb');
      $imageSrcThumb = $imageSrcThumb[0];
      
      $imageSrcFull = wp_get_attachment_image_src($image, 'full');
      $imageSrcFull = $imageSrcFull[0];
      ?>

      <a href="<?php echo $imageSrcFull; ?>" data-lightbox="gallery-<?php echo $galleryUniq; ?>" class="slide">
        <div class="slide-cont">
          <img src="<?php echo $imageSrcThumb; ?>" alt="">
          <div class="cover"><b><?php echo $productTitle; ?></b><br/><?php echo $productSubtitle; ?></div>
        </div>
      </a>
      <!-- /.slide -->

    <?php endwhile; ?>
      </div>
    </div>

  <?php endif; ?>

</div>
