<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMkLoiNx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMkLoiNx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMkLoiNx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMkLoiNx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerMkLoiNx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'MkLoiNx',
    'container.build_id' => '48f1ed9f',
    'container.build_time' => 1586958636,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMkLoiNx');
