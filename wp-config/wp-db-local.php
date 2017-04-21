<?php
// Prevent file from being accessed directly
if (!defined('ABSPATH')) exit();

if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";

define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', substr(getenv('C9_USER'), 0, 16));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '8-*8D}(~S-+1?pb6d/[;u^4=59MA=#nyXIXD!keuoMrr~-aB<9EL/()3sE^z{7^o');
define('SECURE_AUTH_KEY',  '+=qKM{ l1FPv1c%WTsvVMWPfp?1*X`F>|n@M:-_t7>ps-S(6&D#:;0<4F!|UEc7[');
define('LOGGED_IN_KEY',    'vc2N:^2||0QS~xq[|XO-0Xzs4HuBF_4E>HNS79)Q:-_R3.Y}ZnB%1{I/^WBc26*N');
define('NONCE_KEY',        'AVY*o=<uoHh75lP_:>!rUK#WQ]Bg;rgd*gSy{()Ts@g{<5YR?|eE(/+k]Uz8j2u+');
define('AUTH_SALT',        'GhC4N 1c)th)$PIb`Ep|yZ@^>%M1%t=} j58ih2%7EPClis- aC:<s,9gi|XSaK|');
define('SECURE_AUTH_SALT', '8YVG|{-`CW.3c&TdhR|}g, b0_~{Js](5 |6Z5tAGXEsIF-DUSBYd-6*1_hBLT`#');
define('LOGGED_IN_SALT',   'hadKn+6d[DOqP9>J9D~ZDvHjn}n;pcAXR,LSPgf=lY,doo(.8E_@:y|4+jRRT5?e');
define('NONCE_SALT',       ';hW_RZH.:C$OOX&6uO!CmBOB|VCNwnNip|>:n[!1Q+@kz9_&IibWP>8~>XEnpbT!');

$table_prefix = 'wp_';

define('WPLANG',   '');
define('WP_DEBUG', true);
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];