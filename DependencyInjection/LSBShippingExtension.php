<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\DependencyInjection;

use LSB\UtilityBundle\DependencyInjection\BaseExtension;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class LSBShippingExtension extends BaseExtension
{
    const CONFIG_PREFIX = 'lsb_shipping';
    protected $dir = __DIR__;

    /**
     * @return ConfigurationInterface
     */
    public function getTreeConfiguration(): ConfigurationInterface
    {
        return new Configuration();
    }
}
