<?php
  // vars
  $title = get_sub_field('c_e_title');
  $content = get_sub_field('c_e_content');
  $id_e = get_sub_field('c_e_id');
  $bg = get_sub_field('c_e_background');
  $prev = uniqid();
  $next = uniqid();
  $galleryUniq = uniqid();
 ?>

<div class="inspirations <?php echo $bg ? $bg : '' ?>" <?php echo $id_e ? 'id="'.$id_e.'"' : '' ?>>
  <?php echo $title ? '<h3>'.$title.'</h3>' : '' ?>
  <?php echo $content ? '<p>'.$content.'</p>' : '' ?>

  <?php if( have_rows('e_carousel') ): ?>

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

    <?php while( have_rows('e_carousel') ): the_row();
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
