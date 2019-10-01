<?php

spl_autoload_register(function($className) {

	$className =  str_replace('\\', DIRECTORY_SEPARATOR, $className );
	require $_SERVER['DOCUMENT_ROOT'].'/'.$className . '.php';
});

