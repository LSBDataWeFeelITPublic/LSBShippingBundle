<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\Manager;

use LSB\ShippingBundle\Entity\MethodInterface;
use LSB\ShippingBundle\Factory\MethodFactoryInterface;
use LSB\ShippingBundle\Repository\MethodRepositoryInterface;
use LSB\UtilityBundle\Factory\FactoryInterface;
use LSB\UtilityBundle\Form\BaseEntityType;
use LSB\UtilityBundle\Manager\ObjectManagerInterface;
use LSB\UtilityBundle\Manager\BaseManager;
use LSB\UtilityBundle\Repository\RepositoryInterface;

/**
* Class MethodManager
* @package LSB\ShippingBundle\Manager
*/
class MethodManager extends BaseManager
{

    /**
     * MethodManager constructor.
     * @param ObjectManagerInterface $objectManager
     * @param MethodFactoryInterface $factory
     * @param MethodRepositoryInterface $repository
     * @param BaseEntityType|null $form
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        MethodFactoryInterface $factory,
        MethodRepositoryInterface $repository,
        ?BaseEntityType $form
    ) {
        parent::__construct($objectManager, $factory, $repository, $form);
    }

    /**
     * @return MethodInterface|object
     */
    public function createNew(): MethodInterface
    {
        return parent::createNew();
    }

    /**
     * @return MethodFactoryInterface|FactoryInterface
     */
    public function getFactory(): MethodFactoryInterface
    {
        return parent::getFactory();
    }

    /**
     * @return MethodRepositoryInterface|RepositoryInterface
     */
    public function getRepository(): MethodRepositoryInterface
    {
        return parent::getRepository();
    }
}
