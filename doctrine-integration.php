<?php
/*
Plugin Name: Doctrine 2.0 Integration
Version: 1.0
*/
 
require_once dirname(__FILE__) . '/doctrine/vendor/autoload.php';
 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(dirname(__FILE__) . '/models');
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => DB_USER,
    'password' => DB_PASSWORD,
    'dbname'   => DB_NAME,
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

function GetEntityManager() {
	global $dbParams, $config;
	static $em;
	if ($em) {
		return $em;
	}
	return $em = EntityManager::create($dbParams, $config);
}
