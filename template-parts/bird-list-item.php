 <?php set_post_thumbnail_size(200, 200, false); ?>
 <div style="display: flex; flex-direction: column; align-items: center; width: 200px; background-color: #ddd; margin: 10px; padding: 10px;">
   <h2><a href="<?php echo $post->post_name ?>"><?php the_title(); ?></a></h2>
   <?php the_post_thumbnail(); ?>
   <p><?php the_excerpt(); ?></p>
 </div>