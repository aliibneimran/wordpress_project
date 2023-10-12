<?php 
    function wdpf55news_setup(){
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'wdpf55news' ),
	    	'mini_menu'  => __( 'Mini Menu', 'wdpf55news' ),
		) );
    }
    add_action('after_setup_theme','wdpf55news_setup');

    // For Widgets
   
    function wdpf55news_register_widgets() {
        register_sidebar( array(
            'name' => __( 'Sidebar Widgets', 'wdpf55news'),
            'id' => 'right-sidebar-widget',
            'description' => __( 'A widget area located to the right hand side', 'wdpf55news' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-1 Widgets', 'wdpf55news'),
            'id' => 'footer-1-widget',
            'description' => __( 'A widget area located to the right hand side', 'wdpf55news' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-2 Widgets', 'wdpf55news'),
            'id' => 'footer-2-widget',
            'description' => __( 'A widget area located to the right hand side', 'wdpf55news' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-3 Widgets', 'wdpf55news'),
            'id' => 'footer-3-widget',
            'description' => __( 'A widget area located to the right hand side', 'wdpf55news' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-4 Widgets', 'wdpf55news'),
            'id' => 'footer-4-widget',
            'description' => __( 'A widget area located to the right hand side', 'wdpf55news' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
     
        }       
    add_action( 'widgets_init', 'wdpf55news_register_widgets');

    function create_custom_post_type() {

        register_post_type( 'Sliders',
        
            array(
            'labels' => array(
            'name' => __( 'Sliders' ),
            'singular_name' => __( 'Slider' ),
            'all_items' => __( 'All Slider' ),
            'add_new' => __( 'Add New' ),
            'add_new_item' => __( 'All Slider' ),
            'edit_item' => __( 'Edit Slider' ),
            'view_item' => __( 'View Slider' ),
            'search_items' => __( 'Search Slider' ),
            ),
            'public' => true,
            // 'has_archive' => true,
            // 'rewrite' => array('slug'=>'slider-item'),
            // 'menu_icon' => 'dashicon-video-alt',
            'supports' => array( 'title', 'thumbnail','editor')
            )
            );
        }
        
        add_action( 'init', 'create_custom_post_type' );
?>