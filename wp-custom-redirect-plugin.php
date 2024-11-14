<?php
/*
Plugin Name: WP Custom 404 Redirect
Description: Redirects all 404 pages to the homepage.
Version: 1.1
Author: Alex Ruco
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Redirect all 404 pages to the homepage
function custom_404_redirect_to_homepage() {
    if ( is_404() ) {
        wp_redirect( home_url(), 301 ); // Redirects to the homepage URL dynamically
        exit;
    }
}
add_action( 'template_redirect', 'custom_404_redirect_to_homepage' );
