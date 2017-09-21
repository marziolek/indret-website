<?php

// check if the flexible content field has rows of data
if( have_rows('flex') ):

     // loop through the rowsucceshistorier of data
    while ( have_rows('flex') ) : the_row();

        if( get_row_layout() == 'intro' ):

            get_template_part('partials/flex/intro');

        elseif ( get_row_layout() == 'business' ):

            get_template_part('partials/flex/business');

        elseif ( get_row_layout() == 'what_tells' ):

            get_template_part('partials/flex/what-tells');

        elseif ( get_row_layout() == 'attention_points' ):

            get_template_part('partials/flex/attention-points');

        elseif ( get_row_layout() == 'carousel_erhvervsgalleri' ):
            
            get_template_part('partials/flex/carousel-erhvervsgalleri');

        elseif ( get_row_layout() == 'price_picture' ):

            get_template_part('partials/flex/price-picture');

        elseif ( get_row_layout() == 'sliders' ):

            get_template_part('partials/flex/sliders');

        elseif ( get_row_layout() == 'gallery-modal-nomodal' ):

            get_template_part('partials/flex/gallery-modal-nomodal');

        elseif ( get_row_layout() == 'carousel_boliggalleri' ):

            get_template_part('partials/flex/carousel-boliggalleri');

        elseif ( get_row_layout() == 'team' ):

            get_template_part('partials/flex/team');

        elseif ( get_row_layout() == 'quotes' ):

            get_template_part('partials/flex/quotes');

        elseif ( get_row_layout() == 'logos' ):

            get_template_part('partials/flex/logos');

        elseif ( get_row_layout() == 'carousel' ):

            get_template_part('partials/flex/carousel');

        elseif ( get_row_layout() == 'contact' ):

            get_template_part('partials/flex/contact');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
