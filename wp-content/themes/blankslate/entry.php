<div class="category-header">
  <ul>
    <li><a href="/blog">All</a></li>
    <?php wp_list_categories('title_li=');?>
  </ul>
</div>
<?php if ( is_singular() ) {
  get_template_part( 'entry', 'content' );
  } else {
    get_template_part( 'entry', 'archive' );
  } ?>
