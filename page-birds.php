<?php
get_header();
?>
<p>This page uses a page template (birds-page.php) to request and display the custom posts</p>
<a href="https://developer.wordpress.org/plugins/post-types/working-with-custom-post-types/#querying-by-post-type">Querying by Post Type</a>
<div style="display: flex; flex-wrap: wrap;">

  <?php
  $args = array(
    'post_type'      => 'birds_species',
    'posts_per_page' => 10,
  );
  $query = new WP_Query($args);

  if (have_posts()) : while ($query->have_posts()) : $query->the_post();
      get_template_part('template-parts/bird-list-item');
    endwhile;
  else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
  endif; ?>
</div>
<?php

// get_sidebar();
get_footer();
