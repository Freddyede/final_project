<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWExiBiG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWExiBiG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWExiBiG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWExiBiG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWExiBiG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WExiBiG',
    'container.build_id' => '1dc4432a',
    'container.build_time' => 1653068077,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWExiBiG');
