<?php

declare(strict_types=1);

namespace Cooolinho\Bundle\FileImporterBundle;

use Cooolinho\Bundle\FileImporterBundle\DependencyInjection\FileImporterExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FileImporterBundle extends Bundle
{
    public const CONFIGURATION_KEY = 'cooolinho_csv_importer';

    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }

    /**
     * @return FileImporterExtension
     */
    public function getContainerExtension(): FileImporterExtension
    {
        return new FileImporterExtension();
    }
}
