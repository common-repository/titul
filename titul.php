<?php
/*
* Plugin Name: autometa's TITUL
* Description: It reproduces publication titles and links in pages, posts, portfolios or products simply via: [titul] and [titulink].
* Version: 2.2
* Author: JorgeAmVF
* Author URI: https://profiles.wordpress.org/jorgeamvf/
* License: GPL2

autometa's TITUL is developed by JorgeAmVF in order to improve the quality of Quaestio.org
and it is freely provided with the intent to help other developers to fulfill
their needs.

autometa's TITUL is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

autometa's TITUL is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with autometa's TITUL. If not, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
*/

// [titul] = publication title
function autometa_publication_title() {
	$am_titul = '<span id="titul" class="autometa">' . get_the_title() . '</span>';
	return $am_titul;
} 
add_shortcode( "titul", "autometa_publication_title" );

// [titulink] = publication link
function autometa_publication_link() {
	$am_titulink = '<span id="titulink" class="autometa"><a href="' . get_permalink() . '">' . get_the_title() . '</a></span>';
	return $am_titulink;
} 
add_shortcode( "titulink", "autometa_publication_link" );
?>
