<?php

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

// Load objects from a yaml file
$loader = new \Nelmio\Alice\Fixtures\Loader();
$objects = $loader->load(__DIR__.'/fixtures/category.yml');

// Optionally persist them into the doctrine object manager
// you can also do that yourself or persist them in another way
// if you do not use doctrine
$persister = new \Nelmio\Alice\Persister\Doctrine($entityManager);
$persister->persist($objects);