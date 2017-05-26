<?php
require dirname( __FILE__ ) . '/inc/init.php';

/**
 * Các thiết lập liên quan đến theme
 */
function devmob_theme_setup() {
    add_image_size( 'sanpham_thumb', 370, 300, false );
}
add_action('init', 'devmob_theme_setup', 10);

/**
 * Xóa style.css của child-theme.
 */
function remove_default_styles() {
    wp_dequeue_style( 'sparkling-style' );
}
add_action('wp_print_styles', 'remove_default_styles', 10 );

/**
 * Đăng ký handle cho style.css của theme mẹ
 * Và sử dụng như một thành phần phụ thuộc của style.css theme con
 */
function devmob_load_theme_style() {
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-styles', get_stylesheet_directory_uri() . '/style.css', array('parent-styles'));
}
add_action('wp_enqueue_scripts', 'devmob_load_theme_style', 15 );

function devmob_scripts_enqueue() {
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap-3.3.7-dist/js/bootstrap.js', array('jquery'), NULL, true );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap-3.3.7-dist/css/bootstrap.css', false, NULL, 'all' );

    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );
}
add_action( 'wp_enqueue_scripts', 'devmob_scripts_enqueue' );



/**
 * @param $query
 * Thiết lập hiển thị post type `sanpham` ngoài trang chủ.
 */
function devmob_product_home($query) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', 'sanpham' );
    }
}
add_filter('pre_get_posts', 'devmob_product_home');
