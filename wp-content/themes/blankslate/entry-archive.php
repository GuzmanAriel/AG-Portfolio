
      <div class="blog-archive-cont">
        <h3><?php the_title(); ?></h3>
        <?php the_post_thumbnail('alt-thumb'); ?>
        <div class="text-content">
          <div class="the-excerpt">
            <?php echo(get_the_excerpt()); ?>
          </div>
          <div class="the-author">
            <div class="author-img">
              <?php echo get_avatar( get_the_author_email(), '30' ); ?>
            </div>
            <div class="author-text">
              <?php echo get_the_author(); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="divider"></div>
