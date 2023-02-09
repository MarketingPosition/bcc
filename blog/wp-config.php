<?php
define('WP_CACHE', true); // Added by WP Rocket
define('DB_NAME', "udekuqzses");
define('DB_USER', "udekuqzses");
define('DB_PASSWORD', "6SwCpTGxa3");

define('DB_HOST', "localhost");
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'gnL1i7egjdqhwLvrRDfPbuhZIO0ugHhFNE8Pmh1C');
define('SECURE_AUTH_KEY',  'zTGPpB336xGgIfuXvl8HmraPeU5m7leyhwLQHwqR');
define('LOGGED_IN_KEY',    'VIKalVxnMgCBzcLpLGRgpoF3Q3o4SBaHMdtHYVJp');
define('NONCE_KEY',        'IXXOxrDPIpiCzTBKSaHsQUeXAzRdoNdqBU4znOjV');
define('AUTH_SALT',        'FWH1lSzauGRskzScp1TPVUssSN6NGf0EOzkD9gVK');
define('SECURE_AUTH_SALT', 'JQzTP5Ghp68fw2NW8AYNhV1dD4lq5eAdDtQYJh3u');
define('LOGGED_IN_SALT',   'DrVVPBplR88BtpZOs37VD2ck016HmhjpafOxArJu');
define('NONCE_SALT',       '1R8CFZKtf9bB3VJPfNs5AX7mxbPSTvsRiu29a4fl');

$table_prefix  = "wp_";

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', 'http://phpstack-603764-2079590.cloudwaysapps.com/blog');
define('WP_HOME', 'http://phpstack-603764-2079590.cloudwaysapps.com/blog');

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

//ini_set('display_errors','Off');
//ini_set('error_reporting', E_ALL );
//define('WP_DEBUG', false);
//define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

if (!defined('ABSPATH'))
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
