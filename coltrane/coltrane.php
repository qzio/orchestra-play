<?php
if ( ! defined('PROJECT_PATH') ) die('You need to specify PROJECT_PATH');
define('COLTRANE_PATH', dirname(__FILE__));
session_start(); // @todo make this configurable
//require PROJECT_PATH.'/config.php'; @todo do not want to have config files in repository

$GLOBALS['_required_files'] = array();
function require_libs($path = '')
{
	foreach ( glob( $path.'/*' ) as $p ) {
		if (is_dir($p)) {
			require_libs( $p );
		} else if ( is_file($p) && substr(basename($p),-4,4) == '.php' && ! in_array($p, $GLOBALS['_required_files'])) {
			$GLOBALS['_required_files'][] = $p;
			require $p;
		}
	}
}

require_libs(PROJECT_PATH.'/lib');
require_libs(COLTRANE_PATH.'/lib');