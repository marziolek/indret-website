<?php

/*
 * Template Name: Bolig (from FrontPage)
 *
 */
get_header();
the_post();
?>

<?php
  // vars
  $home = 1865;
?>

<?php
if(have_rows('flex', $home)):
  while(have_rows('flex', $home)): the_row();
      if( get_row_layout() == 'price_picture' ):

        // vars
        $titleMain = get_sub_field('pc_main_title', $home);
        $number = 1;

        ?>

        <?php // start of FLEXIBLE CONTENT ?>

          <section class="picture-price" id="bolig">

          <?php if( have_rows('pc_pins') ): ?>

             <div class="pins">

            <?php while( have_rows('pc_pins') ): the_row();
              // vars
              $title = get_sub_field('pc_title');
              $content = get_sub_field('pc_content');
              $price = get_sub_field('pc_price');
              ?>

                <div class="<?php echo $number == 1 ? 'pins-left' : 'pins-right' ?>">
                  <?php echo $title ?><br/> <?php echo $price ?>
                  <a class="pins-more">Læs mere</a>
                  <div class="relative">
                    <div class="pins-tooltip">
                      <h3><?php echo $title ?></h3>
                      <p>
                        <?php echo $content ?>
                      </p>
                      <h3><?php echo $price ?></h3>
                    </div>
                    <!-- /.pins-tooltip -->
                  </div>
                </div>

            <?php $number++;endwhile; ?>
            </div>
            <!-- /.slider -->

          <?php endif; ?>

           <?php if( $titleMain ): ?>
             <h2 class="pins-title">
               <?php echo $titleMain ?>
             </h2>
           <?php endif; ?>
         </section>
         <!-- /.picture-price -->

         <?php // end of FLEXIBLE CONTENT ?>

          <?php
                // flexible row logic
          endif;
      endwhile;
endif;
 ?>

 <?php
 if(have_rows('flex', $home)):
   while(have_rows('flex', $home)): the_row();
       if( get_row_layout() == 'sliders' ):
         ?>

         <?php // start of FLEXIBLE CONTENT ?>

          <section class="flex sliders" id="insiration">
            <div class="section-tile link-billed">
              <div class="section-icon center">
                <div class="text-center center">Læs mere<br/> om hvordan jeg griber opgaven an ?</div>
              </div>
            </div>
            <!-- /.section-tile -->

            <?php if( have_rows('slider_1') ): ?>
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

                <img src="<?php echo $image1 ?>" alt="">
              <?php endwhile; ?>
              </div>
              <!-- /.slider -->

            <?php endif; ?>

            <div class="section-tile section-tile--teal link-bolig">
              <div class="section-icon section-icon--text">
                <i class="icon-square"></i>
              </div>
              <div class="text-center">
                Se<br/>
                Boliggalleri
              </div>
            </div>
            <!-- /.section-tile -->

            <?php if( have_rows('slider_2') ): ?>
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

                <img src="<?php echo $image1 ?>" alt="">
              <?php endwhile; ?>
              </div>
              <!-- /.slider -->

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

          <?php // end of FLEXIBLE CONTENT ?>

           <?php
                 // flexible row logic
           endif;
       endwhile;
 endif;
  ?>

<?php get_footer();
