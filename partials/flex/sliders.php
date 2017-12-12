<section class="flex sliders" id="insiration">
  <a href="#billed-galleri" data-target="#billed-galleri" class="section-tile link-billed custom-target-link">
    <div class="section-icon center">
      <div class="text-center center">Læs mere<br/> om hvordan jeg griber opgaven an ?</div>
    </div>
  </a>
  <!-- /.section-tile -->

  <?php if( have_rows('slider_1') ): ?>
    <?php 
      $counter = 0;
      while( have_rows('slider_1') ) : the_row();
        $counter++;
    ?>
    <?php endwhile; ?>
    <?php if ($counter > 1) : ?>
      <?php $pager = uniqid(); ?>
      <div class="cycle-slideshow slider"
        data-cycle-timeout=2500
        data-cycle-swipe=true
        data-cycle-swipe-fx=scrollHorz
        data-cycle-pager=".pager-<?php echo $pager ?>"
      >
        <div class="cycle-pager pager-<?php echo $pager ?>"></div>

      <?php while( have_rows('slider_1') ): the_row();
        // vars
        $image1 = get_sub_field('slider_1_image');
        ?>
          <img data-src="<?php echo $image1 ?>" alt="">
      <?php endwhile; ?>
      </div>
      <!-- /.slider -->
    <?php else : ?>
      <?php while( have_rows('slider_1') ): the_row();
        // vars
        $image1 = get_sub_field('slider_1_image');
        ?>
        <div class="cycle-slideshow-fake">
          <img data-src="<?php echo $image1 ?>" alt="">
        </div>          
        <?php endwhile; ?>
    <?php endif; ?>
  <?php endif; ?>

  <a href="#boliggalleri" data-target="#boliggalleri" class="section-tile section-tile--teal link-bolig custom-target-link">
    <div class="section-icon section-icon--text">
      <i class="icon-square"></i>
    </div>
    <div class="text-center">
      Se<br/>
      Boliggalleri
    </div>
  </a>
  <!-- /.section-tile -->

  <?php if( have_rows('slider_2') ): ?>
    <?php 
      $counter = 0;
      while( have_rows('slider_2') ) : the_row();
        $counter++;
    ?>
    <?php endwhile; ?>
    <?php if ($counter > 1) : ?>
      <?php $pager2 = uniqid(); ?>
      <div class="cycle-slideshow slider"
        data-cycle-timeout=2500
        data-cycle-swipe=true
        data-cycle-swipe-fx=scrollHorz
        data-cycle-pager=".pager-<?php echo $pager2 ?>"
      >
        <div class="cycle-pager pager-<?php echo $pager2 ?>"></div>

      <?php while( have_rows('slider_2') ): the_row();
        // vars
        $image1 = get_sub_field('slider_2_image');
        ?>

        <img data-src="<?php echo $image1 ?>" alt="">
      <?php endwhile; ?>
      </div>
      <!-- /.slider -->
    <?php else : ?>
      <?php while( have_rows('slider_2') ): the_row();
        // vars
        $image1 = get_sub_field('slider_2_image');
        ?>
        <div class="cycle-slideshow-fake">
          <img data-src="<?php echo $image1 ?>" alt="">
        </div>   
        <?php endwhile; ?>
    <?php endif; ?>
  <?php endif; ?>

  <div class="section-tile link-section section-tile--citron" data-target="#logos">
    <div class="section-icon section-icon--text">
      <i class="icon-hands"></i>
    </div>
    <div class="text-center">
      Læs<br/>
      succeshistorier
    </div>
  </div>
  <!-- /.section-tile -->
</section>
