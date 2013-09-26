<?php
	/* Framework - rota */
	$controller	= "Controller";
	$view 		= "View";
	$assets 	= "assets";
	
	/* Constantes */
	define('EXT', '.php');
	define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
	
	/* Install */
	if(file_exists('install'.EXT)){
		return include 'install'.EXT;
	}
	
	/* Configs PHP/HTML */
	header('Content-type: text/html; charset=ISO-8859-1');
	
	/* Configs MySql */
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	mysql_set_charset('UTF8');
	
	/* Principais funções */
	require APPPATH.'bootstrap'.EXT;
	
	/* Carregar URL 
echo Request::factory()
	->execute()
	->send_headers(TRUE)
	->body();*/