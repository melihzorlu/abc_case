<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1efIETB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1efIETB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1efIETB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1efIETB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container1efIETB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '1efIETB',
    'container.build_id' => 'c3087e49',
    'container.build_time' => 1633824141,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1efIETB');