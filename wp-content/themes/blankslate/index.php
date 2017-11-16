<?php get_header(); ?>
<div class="category-header">
  <ul>
    <li><a href="/blog">All</a></li>
    <?php wp_list_categories('title_li=');?>
  </ul>
</div>
<section id="content" role="main">
  <article id="general" class="section section-bg-dark section-bottom-rise">
    <div class="section-inner">
      <div class="container">
        <div class="intro">
          <header class="heading">
            <h2 class="wow zoomIn">
              <span class="name"><span class="fn">Ariel Guzman - </span></span>
              <span class="animated-letters category">
                <b class="is-visible">Front End</b><b>Sports</b><b>Other</b>
              </span>
            </h2>
            <div class="separator-d"></div>
          </header>
        </div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
</div>

</div>
<canvas id="particles"></canvas>
</article>
</section>
<?php get_footer(); ?>
