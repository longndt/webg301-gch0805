<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXnM2JxW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXnM2JxW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXnM2JxW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXnM2JxW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXnM2JxW\App_KernelDevDebugContainer([
    'container.build_hash' => 'XnM2JxW',
    'container.build_id' => '9e9a45aa',
    'container.build_time' => 1638440614,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXnM2JxW');