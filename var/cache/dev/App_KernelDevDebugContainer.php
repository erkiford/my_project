<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBxCUOYM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBxCUOYM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBxCUOYM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBxCUOYM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBxCUOYM\App_KernelDevDebugContainer([
    'container.build_hash' => 'BxCUOYM',
    'container.build_id' => 'ae6c677a',
    'container.build_time' => 1677157680,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBxCUOYM');
