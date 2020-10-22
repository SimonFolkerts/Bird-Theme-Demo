<?php function  birds_custom_post_type()
{
  register_post_type(
    'birds_species',
    array(
      'labels' => array(
        'name' => 'Birds', 'textdomain',
        'singular_name' => 'Bird', 'textdomain',
        'search_items' => 'Search Birds',
        'all_items' => 'All Birds',
        'edit_item' => 'Edit Bird',
        'update_item' => 'Update Bird',
        'add_new_item' => 'Add New Bird',
        'new_item_name' => 'New Bird Name',
        'menu_name' => 'Birds',
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
    )
  );
}

add_action('init', 'birds_custom_post_type');
