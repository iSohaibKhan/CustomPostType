<?php

/**
 * SIMPLE CUSTOM POST TYPE:
 * This is the code you need to create a bare-bones WordPress custom
 * post type that will allow you to better organize the posts on your
 * site. This code is according to the WordPress Codex/Developers Handbook.
 */

function basic_custom_post_type() {
    
    register_post_type( 'my_project',
    array(    
        
        'labels' => array( 'name' => __( 'Projects' ), 'singular_name' => __( 'Project' )),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projects'),

      )
    );
  }
  
  add_action( 'init', 'basic_custom_post_type' );

//--------------------------------------------BASIC CUSTOM POST TYPES ENDS HERE: You don't need to copy the whole code.------------------------------------------------

/**
 * ADVANCE IMPLEMENTATION:
 * 
 * The code block below registers the widgets custom post type,
 * customizes the labels and adds a lot of the WordPress editor
 * capabilities to the editor for that post type.
 * 
 * */

function advance_custom_post_type() {
     
    // Define the labels used inside the WordPress admin for this custom post type (CPT)
        $labels = array(
            'name'                => _x( 'Widgets', 'Post Type General Name', 'textdomain' ),
            'singular_name'       => _x( 'Widget', 'Post Type Singular Name', 'textdomain' ),
            'add_new'             => __( 'Add New', 'textdomain' ),
            'add_new_item'        => __( 'Add New Widget', 'textdomain' ),
            'edit_item'           => __( 'Edit Widget', 'textdomain' ),
            'new_item'            => __( 'New Widget' ),
            'all_items'           => __( 'All Widgets', 'textdomain' ),
            'view_item'           => __( 'View Widget', 'textdomain' ),
            'search_items'        => __( 'Search Widget', 'textdomain' ),
            'menu_name'           => __( 'Widgets', 'textdomain' ),
            'parent_item_colon'   => __( 'Parent Widget', 'textdomain' ),
            'update_item'         => __( 'Update Widget', 'textdomain' ),
            'not_found'           => __( 'Not Found', 'textdomain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'textdomain' )
        );
         
    // Define more options for the CPT
         
        $args = array(
            'label'               => $labels,
            'description'         => __( 'Widget information and details', 'textdomain' ),
            'labels'              => $labels,
            // Define the allowed features in the post editor
            'supports'            => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail', 'comments', 'trackbacks', 'post-formats', 'page-attributes', 'custom-fields', 'revisions', ),
            // If hierarchical is true then the CPT behaves like a post. If false, it can have parent and child items like a page. 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            // menu_position defines where in the WP admin menu the CPT appears. 5 puts it right below posts. The higher the number to lower the CPT will be.
            'menu_position'       => 19,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );
         
        // Register this CPT
        register_post_type( 'widgets', $args );
     
    }
     
    // hook into the init action and call create_advanced_posttype when it fires
    add_action( 'init', 'advance_custom_post_type', 0 );

?>
