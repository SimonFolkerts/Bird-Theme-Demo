<?php
get_header();
?>

<section>
  Landing
</section>
<section>
  Birds
  <div style="display: flex;">
    <?php
    $args = array(
      'post_type'      => 'birds_species',
      'posts_per_page' => 3,
      'post_status' => 'publish',
      'orderby' => 'title',
      'order' => 'ASC',
    );
    $query = new WP_Query($args);

    if (have_posts()) : while ($query->have_posts()) : $query->the_post();
        get_template_part('template-parts/bird-list-item');
      endwhile;
    else :
      _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif; ?>
    <p>And more...</p>
  </div>
  Neat Info
  Call to Action
</section>
<section>
  Some Other Stuff???
</section>

<?php
get_footer();
