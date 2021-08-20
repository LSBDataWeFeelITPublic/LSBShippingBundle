<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\Factory;

use LSB\ShippingBundle\Entity\MethodInterface;
use LSB\UtilityBundle\Factory\BaseFactory;

/**
 * Class MethodFactory
 * @package LSB\ShippingBundle\Factory
 */
class MethodFactory extends BaseFactory implements MethodFactoryInterface
{

    /**
     * @return MethodInterface
     */
    public function createNew(): MethodInterface
    {
        return parent::createNew();
    }

}
