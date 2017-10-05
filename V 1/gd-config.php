<?php

define( 'GD_VIP', '160.153.136.1' );
define( 'GD_RESELLER', 1 );
define( 'GD_ASAP_KEY', 'f8653d53e3791894bf788ecab25de069' );
define( 'GD_STAGING_SITE', false );
define( 'GD_EASY_MODE', true );
define( 'GD_SITE_CREATED', 1460583196 );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( '71ab6f52-0089-11e6-9bed-14feb5d41b49;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}