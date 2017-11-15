
<?php if ( is_singular() ) {
  get_template_part( 'entry', 'content' );
  } else {
    get_template_part( 'entry', 'archive' );
  } ?>
