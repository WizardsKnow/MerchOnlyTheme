<?php

	// Add Title Tag
	add_theme_support( 'title-tag' );
	add_filter( 'document_title_separator', 'title_separator' );
	function title_separator() {
		return "|";
	}

	// Add Custom Header
	add_theme_support('custom-header');

	// Add Custom Logo
	add_theme_support('custom-logo');

	// Add Menu Support
	add_theme_support( 'menus' );

	// Register Menus
	register_nav_menus([
		'header-nav' => 'Header Navigation'
	]);

	// Check For Login Page
	function is_login_page() {
	    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
	}

	// Add WooCommerce Support
	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}

	// Pre-populate ACF Fields
	include 'acf-fields.php';

	// Add Options Page
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page([
			'page_title' => 'Theme Options',
			'menu_title' => 'Theme Options'
		]);
	}

	if ( !is_admin() && !is_login_page() ) {

		// Theme Font
		wp_register_style( 'theme-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700' );
		wp_enqueue_style( 'theme-font' );


		// Theme Stylesheet
		wp_register_style( 'theme-styles', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'theme-styles' );

		// FontAwesome
		wp_register_script('font-awesome', 'https://use.fontawesome.com/d50ad6eb7b.js', '', null, true);
		wp_enqueue_script('font-awesome');

		// Theme Script
		wp_register_script( 'theme-script', get_template_directory_uri() . '/assets/js/scripts.js', null, null, true );
		wp_enqueue_script( 'theme-script' );

		// Remove WooCommerce Page Title
		add_filter( 'woocommerce_show_page_title', false );

		// Remove WooCommerce Result Count
		remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

		// Remove WooCommerce Sort By Drop Down
		remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

		// Remove WooCommerce Sidebar
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

		// Remove SKU from Product Page
		function sv_remove_product_page_skus( $enabled ) {
		    if ( is_product() ) {
		        return false;
		    }
		    return $enabled;
		}
		add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus' );

	}

?>