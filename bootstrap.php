<?php // bootstrap.php
/**
 * Gives us the EntityManager from Doctrine
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration(array(
    __DIR__."/app/Entity"),
    $isDevMode
);
// database configuration parameters
$dbConfig = array(
//    'driver' => 'pdo_sqlite',
//    'path' => __DIR__ . '/db.sqlite',
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'dlapp',
);

// obtaining the entity manager
$em = EntityManager::create($dbConfig, $config);