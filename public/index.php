<?php
require dirname(__FILE__) . '/../bootstrap.php';
function on_get()
{
	return "testing orchestra with coltrane";
}
run('index.php');
