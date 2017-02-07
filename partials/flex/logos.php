<?php
  // vars
  $id = get_sub_field('logos_id');
 ?>

<?php if( have_rows('logos') ): ?>

  <section class="logos" <?php echo $id ? 'id="'.$id.'"' : '' ?>>

  <?php while( have_rows('logos') ): the_row();
    // vars
    $image = get_sub_field('logos_image');
    ?>

    <div class="slide-logo"><img src="<?php echo $image ?>" alt=""></div>

  <?php endwhile; ?>

  </section>
  <!-- /.logos -->

<?php endif; ?>

