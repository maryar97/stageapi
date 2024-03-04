<?php

namespace ContainerBVdSwzb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_View_WriteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.view.write' shared service.
     *
     * @return \ApiPlatform\Symfony\EventListener\WriteListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/WriteListener.php';

        $a = ($container->privates['api_platform.state_processor.locator'] ?? $container->load('getApiPlatform_StateProcessor_LocatorService'));

        if (isset($container->privates['api_platform.listener.view.write'])) {
            return $container->privates['api_platform.listener.view.write'];
        }
        $b = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container));

        if (isset($container->privates['api_platform.listener.view.write'])) {
            return $container->privates['api_platform.listener.view.write'];
        }

        return $container->privates['api_platform.listener.view.write'] = new \ApiPlatform\Symfony\EventListener\WriteListener($a, ($container->privates['api_platform.symfony.iri_converter'] ?? self::getApiPlatform_Symfony_IriConverterService($container)), ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)), $b, ($container->privates['api_platform.uri_variables.converter'] ?? self::getApiPlatform_UriVariables_ConverterService($container)));
    }
}
