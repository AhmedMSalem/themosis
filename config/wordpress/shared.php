<?php

/*----------------------------------------------------*/
// WordPress database
/*----------------------------------------------------*/
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', 'utf8mb4_unicode_ci');

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/*
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service 
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_DEFAULT_THEME', 'themosis-theme');

/* That's all, stop editing! Happy blogging. */