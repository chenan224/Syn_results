<?php

$_CONFIG = true;

/* database settings */
$CFG_SERVER = "127.0.0.1";
$CFG_USER = "root";
$CFG_PASSWORD = "123";
$CFG_DATABASE = "webchess";
/* server settings */
$CFG_SESSIONTIMEOUT = "900";
$CFG_EXPIREGAME = "14";
$CFG_MINAUTORELOAD = "10";
$CFG_USEEMAILNOTIFICATION = false;
$CFG_MAILADDRESS = "";
$CFG_MAINPAGE = "";
$CFG_MAXUSERS = "50";
$CFG_MAXACTIVEGAMES = "50";
$CFG_NICKCHANGEALLOWED = false;
$CFG_NEW_USERS_ALLOWED = true;
$CFG_BOARDSQUARESIZE = "50";
$CFG_IMAGE_EXT = "png";

/* Application constants */
define('APP_NAME', 'PHP7-Webchess'); // The name of the app
define('APP_VERSION', '1.1.0'); // The version of the app

/* I18N constants */
define('I18N_GETTEXT_SUPPORT', false); // enable gettext for fetching translations
define('I18N_LOCALE', 'de_DE'); // locale to use (requires the webchess.mo file)

/* mysql table names */
define('communication', 'communication');
define('history', 'history');
define('games', 'games');
define('messages', 'messages');
define('pieces', 'pieces');
define('preferences', 'preferences');
define('players', 'players');

/* mysql table names */
$CFG_TABLE[communication] = "communication";
$CFG_TABLE[games] = "games";
$CFG_TABLE[history] = "history";
$CFG_TABLE[messages] = "messages";
$CFG_TABLE[pieces] = "pieces";
$CFG_TABLE[players] = "players";
$CFG_TABLE[preferences] = "preferences";

?>
