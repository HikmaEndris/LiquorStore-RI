<?php

if ( ! function_exists( 'aperitif_get_search_page_excerpt_length' ) ) {
	/**
	 * Function that return number of characters for excerpt on search page
	 *
	 * @return int
	 */
	function aperitif_get_search_page_excerpt_length() {
		$length = apply_filters( 'aperitif_filter_search_page_excerpt_length', 180 );
		
		return intval( $length );
	}
}
