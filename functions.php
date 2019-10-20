<?php 

//поддержка вукомерс
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
//styles
function enqueue_styles(){
    wp_enqueue_style('reset', get_template_directory_uri() .'/css/reset.css');
    wp_enqueue_style('swiper', get_template_directory_uri() .'/css/swiper.css', array('reset'), null, false);  
    wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css', array('swiper'), null, false);
    wp_enqueue_style('adaptive', get_template_directory_uri() .'/css/adaptive.css', array('main'), null, false);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
//scripts
function enqueue_script(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery-3.2.1.min.js', null, true);
    wp_enqueue_script('map_js', get_template_directory_uri() .'/js/map.js', null, true);
    wp_enqueue_script('common_js', get_template_directory_uri() .'/js/common.js', array('jquery'), null, true);
    wp_enqueue_script('swiper_min', get_template_directory_uri() .'/js/swiper.min.js', array('jquery'), null, true);
    wp_enqueue_script('swiper_main', get_template_directory_uri() .'/js/swiper-main.js', array('swiper_min'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_script');
//header_menu
register_nav_menu('Main', 'MainMenu');
//mobile_menu
register_nav_menu('Mobi', 'MobileMenu');
//catalog menu
register_nav_menu('Catalog', 'CatalogMenu');
//add thumbnails
add_theme_support( 'post-thumbnails' );

//отлючение стилей вукомерс
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
//отключение табов и комментариев
remove_all_filters( 'woocommerce_after_single_product_summary');
//отключение сайдбара
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
//обертка для картинок
add_action( 'woocommerce_before_single_product_summary', 'manera_single_product_image_start_wrapper', 5 );
function manera_single_product_image_start_wrapper(){
    ?>
    <div class="products__item_img">
    <?php
}
add_action( 'woocommerce_before_single_product_summary', 'manera_single_product_image_end_wrapper', 25 );
function manera_single_product_image_end_wrapper(){
    ?>
    </div>
    <?php
}

?>