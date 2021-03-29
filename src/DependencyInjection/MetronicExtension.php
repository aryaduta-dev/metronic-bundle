<?php


namespace Aryaduta\MetronicBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MetronicExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container, new FileLocator(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Resources/config')
        );
        $loader->load('services.yaml');
    }
}