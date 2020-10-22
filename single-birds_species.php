<?php
get_header();
?>

<p>This page uses a custom post type template (single-birds_species.php) to display a single custom post</p>
<a href="https://developer.wordpress.org/plugins/post-types/working-with-custom-post-types/#custom-post-type-templates">Custom Post Type Templates</a>
<!--  haha html goes brbrbr -->
<br>
<br>
<br>
<p>This page could however use a page template (birds-page.php) to request and display the custom post</p>
<a href="https://developer.wordpress.org/plugins/post-types/working-with-custom-post-types/#querying-by-post-type">Querying by Post Type</a>
<div style="display: flex; flex-wrap: wrap;">
  <?php
  while (have_posts()) : the_post(); ?>
    <div>
      <h2><?php the_title(); ?></h2>
      <?php the_post_thumbnail(); ?>
      <p><?php the_content(); ?></p>
    </div>
  <?php endwhile; ?>
</div>
<?php

// get_sidebar();
get_footer();
