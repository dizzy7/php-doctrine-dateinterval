<?php

$loader = require __DIR__ . '/../vendors/autoload.php';
$loader->add('Doctrine\\Tests', __DIR__ . '/../vendors/doctrine/dbal/tests');
$loader->add('Doctrine\\Tests', __DIR__ . '/../vendors/doctrine/orm/tests');

use Doctrine\DBAL\Types\Type;
use Dizzy7\Doctrine\DBAL\Types\DateIntervalType;

Type::addType(
    DateIntervalType::DATEINTERVAL,
    'Dizzy7\\Doctrine\\DBAL\\Types\\DateIntervalType'
);