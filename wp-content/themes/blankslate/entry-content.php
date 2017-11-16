<div id="single" class="section section-bg-dark section-bottom-rise">
  <div class="section-inner">
    <div class="container">
      <div class="the-content">
        <h2> <?php the_title();?></h2>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('featured'); } ?>
        <?php the_content(); ?>
      </div>
      <div class="the-author">
        <div class="author-img">
          <?php echo get_avatar( get_the_author_email(), '30' ); ?>
        </div>
        <div class="author-text">
          <?php echo get_the_author(); ?> -
          <time datetime="<?php echo time_ago(); ?>">
              <?php echo time_ago(); ?>
          </time>
        </div>
      </div>
    </div>
  </div>
</div>
