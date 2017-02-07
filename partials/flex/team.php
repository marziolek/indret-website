<section class="team" id="succeshistorier">
  <?php
    //vars
    $teamImage = get_sub_field('team_image');
    $teamTitle = get_sub_field('team_title');
    $teamDesc = get_sub_field('team_desc');
  ?>
  <?php if( $teamTitle ): ?><h3><?php echo $teamTitle ?></h3><?php endif; ?>
  <?php if( $teamDesc ): ?><p><?php echo $teamDesc ?></p><?php endif; ?>
  <?php if( $teamImage ): ?><img src="<?php echo $teamImage ?>" alt=""><?php endif; ?>
</section>
<!-- /.team -->
