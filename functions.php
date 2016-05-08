<?php 
    add_theme_support('title-tag');
    
    add_theme_support('custom-header',array(
        'default-image'=>get_template_directory_uri().'/image/header.png'
    ));
    
    add_theme_support('custom-background');
    
    add_theme_support('post-thumbnails');
    
    //loading textdomain
    
    load_theme_textdomain('subtle',get_template_directory_uri().'/languages');
    
    //Menu Register
    
    register_nav_menus(array(
        'main-menu'=>__('Main Menu','subtle'),
        'footer-menu'=>__('Footer Menu','subtle')
    ));
    
    
    
?>