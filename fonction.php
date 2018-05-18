<?php 
 
function create_post_your_post(){ 
  register_post_type('sameh', 
    array( 
      'labels'=>array( 
        'name'=>__('sameh'), 
      ), 
      'public'=>true, 
      'hierarchical'=>true, 
      'has_archive'=>true, 
      'supports'=>array( 
        'title', 
        'editor', 
        'excerpt', 
        'thumbnail', 
      ), 
      'taxonomies'=>array( 
        'post_tag', 
        'category', 
      ) 
    ) 
  ); 
  register_taxonomy_for_object_type('category','sameh'); 
  register_taxonomy_for_object_type('post_tag','sameh'); 
} 
add_action('init','create_post_your_post');