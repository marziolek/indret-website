<?php

/*
 * Template Name: Successhistorier (from FrontPage)
 *
 */
get_header();
the_post();
?>

<?php
  // vars
  $home = 1865;
?>

<section class="team" id="succeshistorier">
  TEAM
</section>
<!-- /.team -->

<?php
if(have_rows('flex', $home)):
  while(have_rows('flex', $home)): the_row();
      if( get_row_layout() == 'quotes' ):

        // vars
        $title = get_sub_field('q_title', $home);
        $subtitle = get_sub_field('q_subtitle', $home);
        $bg = get_sub_field('q_background', $home);
        $id = get_sub_field('q_id', $home);
        $prev = uniqid();
        $next = uniqid();

        ?>

        <?php // start of FLEXIBLE CONTENT ?>

          <div class="quotes <?php echo $bg ? 'quotes--bg-ebony-clay' : '' ?>" <?php echo $id ? 'id="'.$id.'"' : '' ?>>
            <div class="quotes-aside">
              <?php echo $subtitle ? '<h4>'.$subtitle.'</h4>' : '' ?>
              <?php echo $title ? '<h3>'.$title.'</h3>' : '' ?>
            </div>

          <?php if( have_rows('q_quotes') ): ?>

            <div class="relative">
              <div class="prev-quotes" id="prev-<?php echo $prev ?>">
                <i class="icon-arrow"></i>
              </div>
              <div class="next-quotes" id="next-<?php echo $next ?>">
                <i class="icon-arrow"></i>
              </div>
              <div class="quotes-slider"
                data-cycle-prev=#prev-<?php echo $prev ?>
                data-cycle-next=#next-<?php echo $next ?>
              >

            <?php while( have_rows('q_quotes') ): the_row();
              // vars
              $quote = get_sub_field('q_quotes_content');
              $full = get_sub_field('q_quotes_full');
              $author = get_sub_field('q_quotes_author');
              ?>

              <div class="quote">
                <p class="quote-content"><?php echo $quote ?></p>
                <p class="quote-more"><b>LÆS</b> MERE</p>
                <div class="quote-modal">
                  <div class="quote-modal-cont">
                    <p><?php echo $full ?></p>
                    <h4><?php echo $author ?></h4>
                  </div>
                </div>
              </div>
              <!-- /.quote -->

            <?php endwhile; ?>
              </div>
              <!-- /.quotes -->
            </div>
            <!-- /.relative -->

          <?php endif; ?>

          </div>
          <!-- /.quotes -->

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
       if( get_row_layout() == 'logos' ): ?>

         <?php // start of FLEXIBLE CONTENT ?>

          <?php if( have_rows('logos') ): ?>

            <section class="logos">

            <?php while( have_rows('logos') ): the_row();
              // vars
              $image = get_sub_field('logos_image');
              ?>

              <div class="slide-logo"><img src="<?php echo $image ?>" alt=""></div>

            <?php endwhile; ?>

            </section>
            <!-- /.logos -->

          <?php endif; ?>

          <?php // end of FLEXIBLE CONTENT ?>

           <?php
                 // flexible row logic
           endif;
       endwhile;
 endif;
  ?>

<?php get_footer();
