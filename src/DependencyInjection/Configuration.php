<?php

namespace Cooolinho\Bundle\FileImporterBundle\DependencyInjection;

use Cooolinho\Bundle\FileImporterBundle\FileImporterBundle;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder(FileImporterBundle::CONFIGURATION_KEY);

        return $treeBuilder;
    }
}
