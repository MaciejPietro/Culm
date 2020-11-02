<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/config.php' ) ) {

	include( dirname( __FILE__ ) . '/config.php' );

} else {

	exit( '<p style="display: block; font-family: Arial; color: #fff; line-height: 1.35; font-size: 15px; background: rgba(255,0,0,0.75); max-width: 80%; width: 200px; margin: 0 auto; padding: 20px; border-radius: 4px; box-shadow: 4px 4px 0 rgba(0,0,0,0.25)">Please check is config file is present. If not add it, and try one more time.</p>');

}



/**
 * Limit WP to 2 revisions for pages and posts
 */
define('WP_POST_REVISIONS', 2);
define('EMPTY_TRASH_DAYS', 7 );



// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');



// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'nat_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );