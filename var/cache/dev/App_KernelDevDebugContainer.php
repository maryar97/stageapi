<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGmAbj5s\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGmAbj5s/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGmAbj5s.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGmAbj5s\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGmAbj5s\App_KernelDevDebugContainer([
    'container.build_hash' => 'GmAbj5s',
    'container.build_id' => '708bbfc1',
    'container.build_time' => 1709576449,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGmAbj5s');
