<?php declare(strict_types = 1);

use Wavevision\LinksTests\Bootstrap;
use Wavevision\NetteTests\Configuration;

require __DIR__ . '/../vendor/autoload.php';
Configuration::setup([Bootstrap::class, 'boot']);
