<?php
function ds_theme_load_script(): void{
    wp_enqueue_style('dstheme-syle', get_stylesheet_uri(), array(), filemtime(filename: get_template_deirectory().'./style.css'),'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null); 
    wp_enqueue_script('dropdown', get_template_directory_uri().'js/dropwdown.js', array(), '1.0', true);

}
add_action('wp_equeue_scripts', 'ds_theme_load_scripts');

redister_nav_menu(
    array(
        'wp_devs_main_menu'=>'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
    );


    $args = array{
        'height' => 224;
        'width ' => 1920;
    }


    add_theme_support('costum-header', $args);
    add_theme_support('post-thumbnail' );
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    )); 


    add_action('after_setup_theme','dstheme_config');
    add_action('widgets_init', 'dstheme_sidebars');
function dstheme_sidebars(){
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'First service Area.',
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'Second service Area.',
            'before_widget' => '<div class = "widget-wwrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'Third service Area.',
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );
} 
?>