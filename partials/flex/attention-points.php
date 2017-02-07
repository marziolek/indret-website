<?php
  // vars
  $title = get_sub_field('att_title');
  $subtitle = get_sub_field('att_subtitle');
  $text = get_sub_field('att_text');
 ?>
<section class="attention-points">
  <div class="att-cont">
    <div class="row">
      <div class="column half">
        <div>
          <h2 class="att-title">AFSÆT</h2>
          <p class="att-desc-border">Enhver indretning tager udgangspunkt i en foregående analyse og analysens elementer kvalificerer i beslutninger indenfor:</p>
        </div>
        <h3 class="att-subtitle">Opmærksomhedspunkter</h3>
      </div>
      <!-- /.column-half -->
      <div class="column half">

        <?php if( have_rows('att_list') ): ?>

          <ul>

          <?php while( have_rows('att_list') ): the_row();
            // vars
            $item = get_sub_field('att_list_item');
            ?>

            <li><?php echo $item ?></li>

          <?php endwhile; ?>

          </ul>

        <?php endif; ?>
      </div>
      <!-- /.column-half -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.att-cont -->

  <?php if( have_rows('att_points') ): ?>

    <div class="att-list">

    <?php while( have_rows('att_points') ): the_row();
      // vars
      $title = get_sub_field('att_title');
      $content = get_sub_field('att_content');
      $bg = get_sub_field('att_color');
      $icon = get_sub_field('att_icon');
      ?>

      <div>
        <div class="att-icon <?php echo $bg ?>">
          <div class="section-icon center">
            <i class="<?php echo $icon ?>"></i>
          </div>
        </div>
        <h4><?php echo $title ?></h4>
        <p><?php echo $content ?></p>
      </div>

    <?php endwhile; ?>

    </div>
    <!-- /.att-list -->

  <?php endif; ?>

</section>
<!-- /.attention-points -->
