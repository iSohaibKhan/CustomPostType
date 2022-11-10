<?php

function create_custom_post_type() {
    
    register_post_type( 'my_project',
    array(    
        
        'labels' => array( 'name' => __( 'Projects' ), 'singular_name' => __( 'Project' )),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),
        
      )
    );
  }
  
  add_action( 'init', 'create_custom_post_type' );

?>