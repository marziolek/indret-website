<?php
  // vars
  $content = get_sub_field('contact_desc');
  $image = get_sub_field('contact_image');
  $id = get_sub_field('contact_id');
 ?>

<section class="contact" <?php echo $id ? 'id="'.$id.'"' : '' ?>>
  <div class="contact-mask"></div>
  <div class="row text-center">
    <div class="column half color-white">
      <h3>Kontakt</h3>
      <h4>INDRET NU</h4>
      <?php echo $content ? '<p class="contact-desc">'.$content.'</p>' : '' ?>
      <?php echo $image ? '<img class="contact-radius" src="'.$image.'" alt="">' : '' ?>
    </div>

    <?php if( have_rows('contact_points') ): ?>

      <div class="column half flex flex-wrap contact-info">

      <?php while( have_rows('contact_points') ): the_row();
        // vars
        $icon = get_sub_field('contact_icons');
        $pointContent = get_sub_field('contact_point_content');
        $link = get_sub_field('contact_link');
        ?>

        <?php if( $link ): ?>
          <a href="<?php echo $link ?>" target="_blank" class="column half">
            <div class="center-icon">
              <i class="icon-<?php echo $icon ?>"></i>
              <?php echo $pointContent ?>
            </div>
          </a>
          <!-- /.column half -->
        <?php else: ?>
        <div class="column half">
          <div class="center-icon">
            <i class="icon-<?php echo $icon ?>"></i>
            <?php echo $pointContent ?>
          </div>
          <!-- /.center -->
        </div>
        <!-- /.column half -->
        <?php endif; ?>
      <?php endwhile; ?>
    </div>
    <!-- /.contact-info -->
  <?php endif; ?>
</section>
<!-- /.contact -->
