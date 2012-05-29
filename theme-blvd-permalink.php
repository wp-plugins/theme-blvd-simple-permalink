<?php
/*
Plugin Name: Theme Blvd Simple Permalink
Description: This plugin retrieve the permalink for a page or post based on the ID with the shortcode [permalink].
Version: 1.0.0
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
 * Usage Example:
 * <a href="[permalink id="123"]">Your Text</a>
 */

function themeblvd_permalink_shortcode( $atts ) {
	return get_permalink( $atts['id'] );
}
add_shortcode( 'permalink', 'themeblvd_permalink_shortcode' );