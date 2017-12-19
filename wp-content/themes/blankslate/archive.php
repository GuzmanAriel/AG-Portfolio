<?php get_header(); ?>
<h1>Hello World</h1>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
</section>
<h1>Hello World</h1>
<?php get_footer(); ?>
