<?php

namespace ContainerGmAbj5s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeListener_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_listener.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.maker.auto_command.make_listener.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:listener', ['make:subscriber'], 'Creates a new event subscriber class or a new event listener class', false, #[\Closure(name: 'maker.auto_command.make_listener', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] fn (): \Symfony\Bundle\MakerBundle\Command\MakerCommand => ($container->privates['maker.auto_command.make_listener'] ?? $container->load('getMaker_AutoCommand_MakeListenerService')));
    }
}
