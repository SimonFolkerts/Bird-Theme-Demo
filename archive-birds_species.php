<?php
get_header();
?>
<p>This page uses a custom post type template (archive-birds_species.php) to display an archive of the custom posts</p>
<a href="https://developer.wordpress.org/plugins/post-types/working-with-custom-post-types/#custom-post-type-templates">Custom Post Type Templates</a>
<div style="display: flex; flex-wrap: wrap;">
  <?php
  if (have_posts()) : while (have_posts()) : the_post();
      set_post_thumbnail_size(200, 200, false); ?>
      <div style="display: flex; flex-direction: column; align-items: center; width: 200px; background-color: #ddd; margin: 10px; padding: 10px;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail(); ?>
        <p><?php the_excerpt(); ?></p>
      </div>
  <?php endwhile;
  else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
  endif; ?>
</div>
<?php

// get_sidebar();
get_footer();
