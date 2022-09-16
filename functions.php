<?php

if(!function_exists('mamurorbestwp')){
    function mamurorbestwp(){

        load_theme_textdomain( 'bestwp', get_template_directory() . '/languages' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );



        // nav 


        function mamurjor_register_my_menus() {
            register_nav_menus(
              array(
                'parimary' => __( 'Primary Menu','bestwp')
               
               )
             );
           }
     add_action( 'init', 'mamurjor_register_my_menus' );


        if(!function_exists('mymamurjorbestthemescript')){
            function mymamurjorbestthemescript(){
                wp_enqueue_style('mystyle',get_stylesheet_uri());

            
               
                wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap', false ); 

                wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' );
                wp_enqueue_style('Font_Awesome');

                wp_register_style( 'bootstrap_cdn', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' );
                wp_enqueue_style('bootstrap_cdn');

               

                wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
                wp_enqueue_style('tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css');
                wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
                       
                wp_enqueue_style( 'stylemainsheet', get_template_directory_uri() . '/css/style.css');
            
            
                wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js');
                wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js');



                wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.4.1.min.js', null, null, true );
                wp_enqueue_script('jQuery');

                wp_register_script( 'jsdelivr', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', null, null, true );
                wp_enqueue_script('jsdelivr');

                wp_enqueue_script( 'owlcarousel_script', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js');


                wp_enqueue_script( 'moment_script', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js');

                wp_enqueue_script( 'timezone_script', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js');

                wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/tempusdominus-bootstrap-4.min.js');


                wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/main.js');

                if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                    wp_enqueue_script( 'comment-reply' );
                }
                
            
            
            }
        }

        add_action( 'wp_enqueue_scripts', 'mymamurjorbestthemescript' );

    }
}


add_action( 'after_setup_theme', 'mamurorbestwp');

require_once get_template_directory() .'/inc/codestar/codestar-framework.php';
require_once get_template_directory() .'/inc/codestar/samples/mytheme-options.php';
require_once get_template_directory() .'/inc/custom-post/service-section.php';
?>
