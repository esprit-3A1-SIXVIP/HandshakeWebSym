<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXnfd2g5\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXnfd2g5/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXnfd2g5.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXnfd2g5\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXnfd2g5\appDevDebugProjectContainer([
    'container.build_hash' => 'Xnfd2g5',
    'container.build_id' => 'd178d690',
    'container.build_time' => 1592435105,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXnfd2g5');
