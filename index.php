<?php
	/* Constantes */
	define('EXT'		, '.php');
	define('DOCROOT'	, realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
	define('CONTROLLER'	, realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR);
	define('VIEW'		, realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR."View".DIRECTORY_SEPARATOR);
	define('ASSETS'		, realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR."Assets".DIRECTORY_SEPARATOR);
	define('SYSTEM'		, realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR."System".DIRECTORY_SEPARATOR);
	
	/* Configs PHP/HTML */
	header('Content-type: text/html; charset=ISO-8859-1');
	date_default_timezone_set('Brazil/East');
	setlocale(LC_ALL, 'pt_BR.utf-8');
	ini_set('unserialize_callback_func', 'spl_autoload_call');
	spl_autoload_extensions(EXT);
	
	/* Configs MySql */
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	mysql_set_charset('UTF8');
	
	/* Install */
	if(file_exists('install'.EXT))
	require_once('install'.EXT);
	
	/* Auto Load */
	require_once(SYSTEM."AutoLoad".EXT);