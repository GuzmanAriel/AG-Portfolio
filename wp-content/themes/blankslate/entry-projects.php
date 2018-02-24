<?php
  $args = array( 'post_type' => 'project' );
  $the_query = new WP_Query( $args );
?>



<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post();
  $index = $the_query->current_post + 1;
?>
  <li data-groups="[&quot;<?php echo get_post_meta(get_the_ID(), 'projecttype', true);?>&quot;]" class="works-item">
    <a href="<?php echo '#works-item-details-' .$index ?>" class="works-item-link">
      <span class="works-item-thumb">
      <img src="<?php echo get_post_meta(get_the_ID(), 'thumbimage', true);?>" width="250" height="250" alt="">
      </span>
    <div id="<?php echo 'works-item-details-' .$index ?>" class="popup mfp-hide">
    </a>
      <figure><img src="<?php echo get_post_meta(get_the_ID(), 'photoimage', true);?>" width="750" height="500" alt=""></figure>
      <div class="popup-inner">
        <h3><?php the_title();?></h3>
        <p><?php the_content();?></p>
        <div class="center"><a href="<?php echo get_post_meta(get_the_ID(), 'link', true);?>" class="btn">View site</a></div>
      </div>
    </div>
  </li>
<?php wp_reset_postdata(); ?>
<?php endwhile; endif; ?>
