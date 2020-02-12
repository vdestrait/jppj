<?php

add_action('after_setup_theme', function() {
    // Customize
    add_theme_support('custom-logo', [
        'height' => 400,
        'width' => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'title' => 'site-description'
    ]);


    add_theme_support('custom-header');
    add_theme_support( 'hybrid-core-template-hierarchy' );
    add_theme_support( 'loop-pagination' );
    add_theme_support( 'get-the-image' );   
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'cleaner-caption' );
    add_theme_support( 'cleaner-gallery' );

    // Menus
    register_nav_menus([
        "primary_menu" => "Primary",
        "socials_links_menu" => "Socials Links"
    ]);
});



add_action('wp_enqueue_scripts', function(){
    // fct wp pui permet de register un style
    wp_register_style('jppjStyle', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style('jppjStyle');

    wp_enqueue_script( 'jppjScript', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('jppjScript');

    
});

add_filter('wp_nav_menu_items', function($items, $args){
    // if($args->theme_location === 'socials_links_menu'){
    //     preg_match('(?:[a-z][a-z]+)(<\/a>)', $items, $matches, PREG_OFFSET_CAPTURE);
    // }
    return $items;
}, 10, 2);

//Widgets
function jppj_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer sidebar',
        'id'            => 'footer_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'jppj_widgets_init' );


// Post types

/* Concert */
add_action( 'init', 'register_cpt_concert' );
function register_cpt_concert() {

    $labels = array(
    'name' => __( 'Concert', 'concert' ),
    'singular_name' => __( 'Concert', 'concert' ),
    'add_new' => __( 'Ajouter', 'concert' ),
    'add_new_item' => __( 'Ajouter un Concert', 'concert' ),
    'edit_item' => __( 'Modifier', 'concert' ),
    'new_item' => __( 'Nouveau Concert', 'concert' ),
    'view_item' => __( 'Voir Concert', 'concert' ),
    'search_items' => __( 'Chercher', 'concert' ),
    'not_found' => __( 'Pas de Concert trouv&eacute', 'concert' ),
    'not_found_in_trash' => __( 'Pas de Concert dans la corbeille', 'concert' ),
    'parent_item_colon' => __( 'Concert Parent:', 'concert' ),
    'menu_name' => __( 'Concerts', 'concert' ),
    );

    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array('title', 'excerpt', 'author', 'thumbnail', 'revisions' ),
    'public' => true,
    'show_ui' => true,
    'menu_position' => 4,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => true,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );

    register_post_type( 'concert', $args );
}

add_action('acf/render_field/name=field_name', 'my_acf_dynamic_message');
function my_acf_dynamic_message(){
    
    echo 'Hello World';
    
}



