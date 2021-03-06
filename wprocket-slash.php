<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );
/*
Plugin Name: WP Rocket Trailing Slash
Description: Force the trailing slash when using WPRocket caching.
Plugin URI: http://clarknikdelpowell.com
Author: Glenn Welser (CNP)
Author URI: http://clarknikdelpowell.com
*/

add_filter( 'before_rocket_htaccess_rules', function() {
	$redirection = '# Force trailing slash' . PHP_EOL;
    $redirection .= 'RewriteEngine On' . PHP_EOL;
    $redirection .= 'RewriteCond %{REQUEST_URI} /+[^\.]+$' . PHP_EOL;
    $redirection .= 'RewriteRule ^(.+[^/])$ %{REQUEST_URI}/ [R=301,L]' . PHP_EOL . PHP_EOL;
    return $redirection;
} );
