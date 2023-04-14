<?php 




    function wpbootstrap_enqueue_styles() {
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/styles.css' );
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', array(), null );
  
    }
        add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');


function addjs()
{
    wp_register_script( "s",get_template_directory_uri()."/assets/js/script.js");
    wp_enqueue_script( "s" );
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/22250bbf6a.js', array(), '5.15.3', true );

    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true );

}

add_action("wp_enqueue_scripts","addjs");






function plz_analytics(){
    ?>
    
    <?php
}

add_action("wp_body_open","plz_analytics");


function theme_supports(){
    add_theme_support('title-tag');
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    add_theme_support('post-thumbnails');
 
    add_theme_support('custom-logo',
    array(
        "width" => 10,
        "height" => 10,
      
    )
    
    );
    
}

add_action("after_setup_theme","theme_supports");

function plz_add_menus(){
    register_nav_menus(
        array(
        'menu-principal' => "Menu principal",
        'menu-responsive' => "Menu responsive"
        )
    );
}

add_action("after_setup_theme", "plz_add_menus");


function ricardo_sidebar(){
    register_sidebar(  
    array(
        'name'=> 'sidebar',
        'id'=> 'sidebar1',
        'before_title'=> '',
        'after_title'=> '',
        'before_widget'=> 'hola',
        'after_widget'=> ''

        )
    );
}
    
add_action("widgets_init", "ricardo_sidebar");




?>
