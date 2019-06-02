<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

define( 'WP_CACHE_KEY_SALT', 'wpadmin.bracketspace.com' );
define( 'WP_REDIS_SELECTIVE_FLUSH', true );
define( 'SPINUPWP_CACHE_PATH', '/cache/wpadmin.bracketspace.com' );
