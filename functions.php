<?php 
//  wp lnks

wp_enqueue_style( 'style-main', get_stylesheet_uri() );
wp_enqueue_style( 'style-boostrap', get_template_directory_uri().'./assects/css/bootstrap.min.css' );
wp_enqueue_script( 'script-boostrap', get_template_directory_uri() . './assects/js/bootstrap.bundle.min.js', array(), '1.0.0', true );


// 
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
//
register_nav_menus([
    'main-manu' => 'primary',
    'side-manu' => 'sideMenu',
    'footer-manu' => 'footer'
]);
//
register_sidebar([
    'name' => 'top_lft',
    'id' => 'top_lft',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'top_rgt',
    'id' => 'top_rgt',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'post_tlt',
    'id' => 'post_tlt',
    'before_widget' => '',
    'after_widget' => '',
]);


register_sidebar([
    'name' => 'post img',
    'id' => 'post_img',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'post info',
    'id' => 'post_txt',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'recent news',
    'id' => 'news',
    'before_widget' => '',
    'after_widget' => '',
]);

//content box

register_sidebar([
    'name' => 'Box 1',
    'id' => 'box_1',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'Box 2',
    'id' => 'box_2',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'Box 3',
    'id' => 'box_3',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'Box 4',
    'id' => 'box_4',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'Box 5',
    'id' => 'box_5',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'Box 6',
    'id' => 'box_6',
    'before_widget' => '',
    'after_widget' => '',
]);

// 


register_sidebar([
    'name' => 'contuct info',
    'id' => 'contuct_info',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'acotion_info',
    'id' => 'acotion_info',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'emrg_hotline',
    'id' => 'emrg_hotline',
    'before_widget' => '',
    'after_widget' => '',
]);


// 

register_sidebar([
    'name' => 'icons',
    'id' => 'icons',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' => 'lists',
    'id' => 'lists',
    'before_widget' => '',
    'after_widget' => '',
]);
/*<?php the_custom_logo();?>*/
?>  


