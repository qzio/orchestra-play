<?php
require dirname(__FILE__) . '/../bootstrap.php';
function on_get( $params = array() )
{
	$params['title'] = 'Coltrane demo';
	return template('index.php', $params);
}
run('index.php');
