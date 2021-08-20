<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\DependencyInjection;

use LSB\PaymentBundle\Form\MethodTranslationType;
use LSB\ShippingBundle\Entity\Method;
use LSB\ShippingBundle\Entity\MethodInterface;
use LSB\ShippingBundle\Entity\MethodTranslation;
use LSB\ShippingBundle\Entity\MethodTranslationInterface;
use LSB\ShippingBundle\Factory\MethodFactory;
use LSB\ShippingBundle\Form\MethodType;
use LSB\ShippingBundle\LSBShippingBundle;
use LSB\ShippingBundle\Manager\MethodManager;
use LSB\ShippingBundle\Repository\MethodRepository;
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
    const CONFIG_KEY = 'lsb_shipping';

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(self::CONFIG_KEY);

        $treeBuilder
            ->getRootNode()
            ->children()
            ->bundleTranslationDomainScalar(LSBShippingBundle::class)->end()
            ->resourcesNode()
            ->children()
            ->translatedResourceNode(
                'method',
                Method::class,
                MethodInterface::class,
                MethodFactory::class,
                MethodRepository::class,
                MethodManager::class,
                MethodType::class,
                MethodTranslation::class,
                MethodTranslationInterface::class,
                MethodTranslationType::class
            )
            ->end()
            ->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
