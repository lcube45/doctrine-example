<?php
/**
 * Created by PhpStorm.
 * User: lcube
 * Date: 26/08/16
 * Time: 22:32
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$connection = array(
  'driver' => 'pdo_sqlite',
  'path' => __DIR__ . '/db.sqlite',
);

$entityManager = EntityManager::create($connection, $config);