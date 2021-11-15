<?php

function rentit_wc_modify() {
	/*
 * SHOP PAGE LAYOUT
 * */
// ADD THE MAIN CONTAINER AND ROW WITH THE BOOTSTRAP 5 CLASSES
	add_action( 'woocommerce_before_main_content', 'rentit_open_container_row', 5 );
	function rentit_open_container_row() {
		echo '<div class="container shop-content"><div class="row">';
	}

// CLOSE THE MAIN CONTAINER AND ROW
	add_action( 'woocommerce_after_main_content', 'rentit_close_container_row', 5 );
	function rentit_close_container_row() {
		echo '</div></div>';
	}

// ADD THE SIDEBAR TO THE RIGHT PLACE INTO THE HTML CODE
// FIRST REMOVE IT FROM THE ORIGINAL PLACE
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

	if ( is_shop() ) {
		// ADD THE PARENT SIDEBAR CONTAINER
		add_action( 'woocommerce_before_main_content', 'rentit_add_sidebar_tags', 6 );
		function rentit_add_sidebar_tags() {
			echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
		}

		// ADD THE SIDEBAR
		add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );
		// ADD THE CLOSE TAGS FOR THE PARENT SIDEBAR CONTAINER
		add_action( 'woocommerce_before_main_content', 'rentit_close_sidebar_tags', 8 );
		function rentit_close_sidebar_tags() {
			echo '</div>';
		}
	}


// ADD THE TAGS FOR THE LAYOUT FOR THE PRODUCT GRID
	add_action( 'woocommerce_before_main_content', 'rentit_add_shop_tags', 9 );
	function rentit_add_shop_tags() {
		if ( is_shop() ) {
			echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
		} else {
			echo '<div class="col">';
		}
	}

// CLOSE THE TAGS FOR THE LAYOUT FOR THE PRODUCT GRID
	add_action( 'woocommerce_after_main_content', 'rentit_close_shop_tags' );
	function rentit_close_shop_tags() {
		echo '</div>';
	}

// ADD THE EXCERPT TO THE SHOP PAGE (UNCOMMENTED IF IT'S NEEDED)
//add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
}

add_action( 'wp', 'rentit_wc_modify' );