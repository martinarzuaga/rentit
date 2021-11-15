<?php

// STYLES
function rentit_scripts_styles()
{
    // BOOTSTRAP SCRIPTS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.2');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
    // GOOGLE FONTS
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@600;700;800&family=Rubik:ital,wght@0,400;0,700;1,400&display=swap', array(), '1.0.0', 'all');
    //Main Style Sheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css', 'google-fonts'), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'rentit_scripts_styles');

// MENUS
function rentit_config()
{
    register_nav_menus(array(
        'menu-main'              => __('Menu Principal', 'rent-it'),
        'menu-pack-categories'   => __('Categorias de Packs', 'rent-it'),
        'menu-blog-categories'   => __('Categorias del Blog', 'rent-it'),
        'menu-footer-left'       => __('Footer Principal', 'rent-it'),
        'menu-footer-middle'     => __('Footer Categorias', 'rent-it')
    ));

    add_theme_support('woocommerce', array(
		'thumbnail_image_width' => 255,
	    'single_image_width' => 255,
	    'product_grid'   => array (
			'default_rows'  => 12,
		    'min_rows'   => 1,
		    'max_rows'   => 12,
		    'default_columns'   => 4,
		    'min_columns'   => 1,
		    'max_columns'   => 4
	    )
    ));
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'rentit_config', 0);

add_action('woocommerce_before_main_content', 'rentit_open_container_row', 5);

function rentit_open_container_row() {
	echo '<div class="container shop-content"><div class="row">';
}

add_action('woocommerce_after_main_content', 'rentit_close_container_row', 5);

function rentit_close_container_row() {
	echo '</div></div>';
}

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

add_action('woocommerce_before_main_content', 'rentit_add_sidebar_tags', 6);
function rentit_add_sidebar_tags() {
	echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

add_action('woocommerce_before_main_content', 'rentit_close_sidebar_tags', 8);
function rentit_close_sidebar_tags() {
	echo '</div>';
}

add_action('woocommerce_before_main_content','rentit_add_shop_tags', 9);
function rentit_add_shop_tags() {
	echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
}

add_action('woocommerce_after_main_content', 'rentit_close_shop_tags');
function rentit_close_shop_tags() {
	echo '</div>';
}