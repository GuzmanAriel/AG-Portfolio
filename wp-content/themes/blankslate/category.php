<?php get_header(); ?>
<div class="category-header">
  <ul>
    <li><a href="/blog">All</a></li>
    <?php wp_list_categories('title_li=');?>
  </ul>
</div>
<article id="general" class="section section-bg-dark section-bottom-rise">
  <div class="section-inner">
    <div class="container">
      <div class="intro">
        <header class="heading">
          <h2 class="wow zoomIn">
            <span class="name"><span class="fn"><?php echo single_cat_title(); ?></span></span>
          </h2>
          <div class="separator-d"></div>
        </header>
      </div>
      <?php if (is_category()) { ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'entry', 'archive' ); ?>
      <?php endwhile; endif; ?>
  <?php } ?>
    </div>
  </div>
  </article>
</section>

<?php get_footer(); ?>
