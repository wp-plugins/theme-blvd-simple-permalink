<?php
/*
Plugin Name: Theme Blvd Simple Permalink
Description: This plugin retrieve the permalink for a page or post based on the ID with the shortcode [permalink].
Version: 1.0.1
Author: Jason Bobich
Author URI: http://jasonbobich.com
License: GPL2
*/

/*
Copyright 2012 JASON BOBICH

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
 * Add the permalink shortcode.
 *
 * Usage Examples:
 * <a href="[permalink id="123"]">Your Text</a>
 * <a href="[permalink slug="your-page"]">Your Text</a>
 * <a href="[permalink slug="your-post" post_type="post"]">Your Text</a>
 */

function themeblvd_permalink_shortcode( $atts ) {
	$output = '';
	$default = array(
        'id' => '',
        'slug' => '',
        'post_type' => 'page'
    );
    extract( shortcode_atts( $default, $atts ) );
    
    // Get post ID from inputted slug
    if( ! $id && $slug )
    	$id = themeblvd_post_id_by_name( $slug, $post_type );
    
    // If we have a post ID, get the permalink
    if( $id )
    	$output = get_permalink( $id ); 
    
    return $output;
}
add_shortcode( 'permalink', 'themeblvd_permalink_shortcode' );

/**
 * Retrieve post ID based on the slug.
 *
 * This function is copied from the Theme Blvd framework.
 */

if( ! function_exists( 'themeblvd_post_id_by_name' ) ) { 
	function themeblvd_post_id_by_name( $slug, $post_type ) {
		global $wpdb;
		$null = null;
		$slug = sanitize_title( $slug );
		
		// Grab posts from DB (hopefully there's only one!)
		$posts = $wpdb->get_results( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND (post_type = %s)", $slug, $post_type ));
		
		// If no results, return null
		if ( empty($posts) )
			return $null;
		
		// Run through our results and return the ID of the first. 
		// Hopefully there was only one result, but if there was 
		// more than one, we'll just return a single ID.
		foreach ( $posts as $post )
			if( $post->ID )
				return $post->ID;
		
		// If for some odd reason, there was no ID in the returned 
		// post ID's, return nothing.
		return $null;
	}
}