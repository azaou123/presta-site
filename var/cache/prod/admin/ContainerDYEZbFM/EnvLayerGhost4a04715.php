<?php

namespace ContainerDYEZbFM;

class EnvLayerGhost4a04715 extends \PrestaShop\PrestaShop\Core\FeatureFlag\Layer\EnvLayer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('EnvLayerGhost4a04715', false)) {
    \class_alias(__NAMESPACE__.'\\EnvLayerGhost4a04715', 'EnvLayerGhost4a04715', false);
}
