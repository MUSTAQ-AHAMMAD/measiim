<?php
// Manual fix for WordPress REST API autoloader failure
// Load in dependency order (parent classes first)

// 1. Load the base REST Controller (root parent)
if ( file_exists( __DIR__ . '/wp-includes/rest-api/class-wp-rest-controller.php' ) ) {
    require_once __DIR__ . '/wp-includes/rest-api/class-wp-rest-controller.php';
}

// 2. Load the base Revisions Controller (extends WP_REST_Controller)
if ( file_exists( __DIR__ . '/wp-includes/rest-api/endpoints/class-wp-rest-revisions-controller.php' ) ) {
    require_once __DIR__ . '/wp-includes/rest-api/endpoints/class-wp-rest-revisions-controller.php';
}

// 3. Load other potentially missing classes
if ( file_exists( __DIR__ . '/wp-includes/l10n/class-wp-translation-controller.php' ) ) {
    require_once __DIR__ . '/wp-includes/l10n/class-wp-translation-controller.php';
}

// 4. Also load WP_REST_Server which is commonly needed
if ( file_exists( __DIR__ . '/wp-includes/rest-api/class-wp-rest-server.php' ) ) {
    require_once __DIR__ . '/wp-includes/rest-api/class-wp-rest-server.php';
}

// 5. Load WP_REST_Request
if ( file_exists( __DIR__ . '/wp-includes/rest-api/class-wp-rest-request.php' ) ) {
    require_once __DIR__ . '/wp-includes/rest-api/class-wp-rest-request.php';
}

// 6. Load WP_REST_Response
if ( file_exists( __DIR__ . '/wp-includes/rest-api/class-wp-rest-response.php' ) ) {
    require_once __DIR__ . '/wp-includes/rest-api/class-wp-rest-response.php';
}
/** Database settings */
define( 'DB_NAME', 'measimba_measiim' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/** Authentication keys */
define('AUTH_KEY', 'li5{!B*{#0*F05}GKX4MIPmF-kXhyv{~?x=sm>zE%_iPm~kPtm~o;-[gj`0lMl`[');
define('SECURE_AUTH_KEY', 'FI35GI%%K-|/zGqT-c@Ot_wQvxFn_~/JwP X>8hYww-c2/,!+hV<0RH+(hoD+-S_');
define('LOGGED_IN_KEY', 'm,iQLKn$#}Hez_p<9t-d(rxBwZ^?ZOlzOv8Dwkpu8R9iS%P6 7|W:BTME3.f[w.S');
define('NONCE_KEY', 'SF;o2Mw Y9=Tbw-XRMlbRsn7nasV9b`MMZ=.wNqyWJ @UE_=x<wxGW>K$|wU/-iw');
define('AUTH_SALT', 'E`:mQwCg|6f;pXUXhuOce8Fsmqv,-U3rBI T7P9sxgLW v{j&xQOD0YX-{FWj|-0');
define('SECURE_AUTH_SALT', 'kv-#};@ZT3kd:D^,RN7{+WgmgXysFrx~5sTwn$F!hbAwzpP a$.%kw>KHzN&wFe,');
define('LOGGED_IN_SALT', '@-`Ys;^^T0S1H3_dmekvtSc6H9`9_-?];mVtB{#1cO1wuaivr m=OH%/?qjTO45R');
define('NONCE_SALT', 'Z@S<-D$XxVxmSDv[U3bG.(q,lHJn$cG@JLlxC8vAsXwIEQez0nIn2;0N4[o|6N-^');

/** Table prefix */
$table_prefix = 'mmba_';

/** Debug */
define( 'WP_DEBUG', true );
define('WP_DEBUG_DISPLAY', true);

define('WP_CONTENT_DIR', __DIR__ . '/myweb');
define('WP_CONTENT_URL', 'https://measiim.edu.in/myweb');

/** Absolute path */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';