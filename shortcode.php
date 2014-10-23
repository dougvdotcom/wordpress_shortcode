<?php
/*
Plugin Name: Aside Shortcode
Plugin URI: http://www.dougv.com/2012/03/16/making-a-simple-wordpress-shortcode-plugin/
Description: A simple plugin that adds an "aside" shortcode to WordPress
Version: 1.0
Author: Doug Vanderweide
Author URI: http://www.dougv.com
License: GPL3
*/

/*
Copyright 2012 Doug Vanderweide

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 3, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function aside_shortcode($atts, $content = null) {
   return '<div class="aside">' . $content . '</div>';
}

function styler_shortcode($atts, $content = null) {
	return '<span class="' . $attrs['class'] . '">' . $content . '</span>';
}

function kicker_shortcode($atts, $content = null) {
	switch($attrs['id']) {
		case 1:
			$out = 'Copyright &copy; 2012 <a href="http://www.twitter.com/#!/dougvdotcom/">Doug Vanderweide</a>.';
			break;
		case 2:
			$out = 'I distribute code under the <a href="http://www.gnu.org/licenses/gpl-3.0.html">GNU GPL version 3</a>.';
			break;
		default:
			$out = 'I herd u liek mudkipz.';
	}
   return $out;
}

add_shortcode('aside', 'aside_shortcode');
add_shortcode('styler', 'styler_shortcode');
add_shortcode('kicker', 'kicker_shortcode');
?>
