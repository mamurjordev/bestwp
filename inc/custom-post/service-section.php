<?php

// post/page/attachemnt/revision/nav menu

add_action('init','mediname_service_section');


      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      

if(!function_exists('mediname_service_section')){
    function mediname_service_section(){

        $labels = array(
            'name'                => _x( 'Services', 'Services', 'bestwp' ),
            'singular_name'       => _x( 'Service', 'Services', 'bestwp' ),
            'menu_name'           => __( 'Service', 'bestwp' ),
            'parent_item_colon'   => __( 'Parent Service', 'bestwp' ),
            'all_items'           => __( 'All Services', 'bestwp' ),
            'view_item'           => __( 'View Service', 'bestwp' ),
            'add_new_item'        => __( 'Add New Service', 'bestwp' ),
            'add_new'             => __( 'Add New Service', 'bestwp' ),
            'edit_item'           => __( 'Edit Service', 'bestwp' ),
            'update_item'         => __( 'Update Service', 'bestwp' ),
            'search_items'        => __( 'Search Service', 'bestwp' ),
            'not_found'           => __( 'Not Found Service', 'bestwp' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'bestwp' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'serivce', 'bestwp' ),
            'description'         => __( 'Product Service', 'bestwp' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'supports'            => array( 'title', 'editor', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            // 'taxonomies'          => array( 'category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'movies', $args );

    }
}






?>