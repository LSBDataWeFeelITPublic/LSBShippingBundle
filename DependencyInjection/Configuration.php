<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\DependencyInjection;

use LSB\ShippingBundle\Entity\Method;
use LSB\ShippingBundle\Entity\MethodInterface;
use LSB\ShippingBundle\LSBShippingBundle;
use LSB\ShippingBundle\Repository\EntityRepository;
use LSB\UtilityBundle\DependencyInjection\BaseExtension as BE;
use LSB\UtilityBundle\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    const CONFIG_KEY = 'lsb_template';

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(self::CONFIG_KEY);

//        $treeBuilder
//            ->getRootNode()
//            ->children()
//            ->bundleTranslationDomainScalar(LSBShippingBundle::class)->end()
//            ->resourcesNode()
//            ->children()
//            ->resourceNode(
//                'method',
//                Method::class,
//                MethodInterface::class,
//                EntityFactory::class,
//                EntityRepository::class,
//                EntityManager::class,
//                EntityType::class
//            )
//            ->end()
//            ->end()
//            ->end()
//            ->end();

        return $treeBuilder;
    }
}
