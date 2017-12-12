<?php

/*
 * Template Name: Mit arbejte (from FrontPage)
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
      if( get_row_layout() == 'contact' ):

        // vars
        $title = get_sub_field('c_title', $home);
        $content = get_sub_field('c_content', $home);
        $id = get_sub_field('c_id', $home);
        $bg = get_sub_field('c_background', $home);
        $prev = uniqid();
        $next = uniqid();

        ?>

        <?php // start of FLEXIBLE CONTENT ?>

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
               <div class="cycle-slideshow carousel"
                 data-cycle-fx=carousel
                 data-cycle-slides="> .slide"
                 data-cycle-timeout=0
                 data-cycle-swipe=true
                 data-cycle-prev=#prev-<?php echo $prev ?>
                 data-cycle-next=#next-<?php echo $next ?>
               >

             <?php while( have_rows('carousel') ): the_row();
               // vars
               $image = get_sub_field('carousel_image');
               $productTitle = get_sub_field('carousel_title');
               $productSubtitle = get_sub_field('carousel_subtitle');
               ?>

               <div class="slide">
                 <div class="slide-cont link-inspirations">
                   <img data-src="<?php echo $image ?>" alt="">
                   <div class="cover"><b><?php echo $productTitle ?></b><br/><?php echo $productSubtitle ?></div>
                 </div>
               </div>
               <!-- /.slide -->

             <?php endwhile; ?>
               </div>
             </div>

           <?php endif; ?>

         </div>

         <?php // end of FLEXIBLE CONTENT ?>

          <?php
                // flexible row logic
          endif;
      endwhile;
endif;
 ?>

<?php get_footer();
