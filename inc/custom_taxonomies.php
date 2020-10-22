<?php

function birds_custom_taxonomy()
{
  $labels = array(
    'name' => 'Bird Groups', 'taxonomy general name',
    'singular_name' => 'Bird Group', 'taxonomy singular name',
    'search_items' => 'Search Bird Groups',
    'all_items' => 'All Bird Groups',
    'edit_item' => 'Edit Bird Group',
    'update_item' => 'Update Bird Group',
    'add_new_item' => 'Add New Bird Group',
    'new_item_name' => 'New Bird Group Name',
    'menu_name' => 'Bird Groups',
  );
  $args = array(
    'hierarchical' => true, // make it hierarchical (like categories)
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'show_in_rest' => true,
  );
  register_taxonomy('bird_group', ['birds_species'], $args);
}
add_action('init', 'birds_custom_taxonomy');
