<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

include __DIR__.'/../vendor/jpgraph/jpgraph/lib/JpGraph/src/jpgraph.php';
include __DIR__.'/../vendor/jpgraph/jpgraph/lib/JpGraph/src/jpgraph_line.php';
include __DIR__.'/../vendor/jpgraph/jpgraph/lib/JpGraph/src/jpgraph_bar.php';
include __DIR__.'/../vendor/jpgraph/jpgraph/lib/JpGraph/src/jpgraph_stock.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
