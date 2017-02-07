<?php
  // vars
  $titleMain = get_sub_field('pc_main_title');
  $number = 1;
 ?>

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
