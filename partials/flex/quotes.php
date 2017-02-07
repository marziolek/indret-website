<?php
  // vars
  $title = get_sub_field('q_title');
  $subtitle = get_sub_field('q_subtitle');
  $bg = get_sub_field('q_background');
  $id = get_sub_field('q_id');
  $prev = uniqid();
  $next = uniqid();
 ?>

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
     <div class="cycle-slideshow quotes-slider"
       data-cycle-fx=carousel
       data-cycle-slides=.quote
       data-cycle-timeout=0
       data-cycle-swipe=true
       data-cycle-swipe-fx=scrollHorz
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

