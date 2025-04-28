<?php
/**
 * GoFood Theme Helpers Functions.
 *
 * @package goFood
 */

if ( ! function_exists( 'gf_get_my_account_url' ) ) {
	/**
	 * Retrieves the URL of the "My Account" page.
	 *
	 * @return string The permalink of the "My Account" page.
	 */
	function gf_get_my_account_url() {
		return get_the_permalink( get_option( 'gofood_myaccount_page_id', '20' ) );
	}
}

if ( ! function_exists( 'gf_if_my_account_page' ) ) {
	/**
	 * Checks if the current page is the "My Account" page.
	 *
	 * @return bool True if the current page is the "My Account" page, false otherwise.
	 */
	function gf_if_my_account_page() {
		return is_page( get_option( 'gofood_myaccount_page_id', '20' ) );
	}
}

if ( ! function_exists( 'gf_get_checkout_url' ) ) {
	/**
	 * Retrieves the URL of the "Checkout" page.
	 *
	 * @return string The permalink of the "Checkout" page.
	 */
	function gf_get_checkout_url() {
		return get_the_permalink( get_option( 'gofood_checkout_page_id', '19' ) );
	}
}

if ( ! function_exists( 'gf_if_checkout_page' ) ) {
	/**
	 * Checks if the current page is the "Checkout" page.
	 *
	 * @return bool True if the current page is the "Checkout" page, false otherwise.
	 */
	function gf_if_checkout_page() {
		return is_page( get_option( 'gofood_checkout_page_id', '19' ) );
	}
}


if ( ! function_exists( 'gf_price' ) ) {
	/**
	 * Formats a given price into a string with HTML structure for displaying.
	 *
	 * The formatted price includes a dollar currency symbol and ensures two decimal places.
	 *
	 * @param float $price The price to be formatted.
	 * @return string The formatted price as an HTML string.
	 */
	function gf_price( $price ) {
		return '<span class="gofood-Price-amount amount"><bdi><span class="gofood-Price-currencySymbol">$</span>' . number_format( $price, 2 ) . '</bdi></span>';
	}
}
