<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\Entity;

/**
 * Interface MethodInterface
 * @package LSB\ShippingBundle\Entity
 */
interface MethodInterface
{
    const TYPE_COURIER = 'courier';
    const TYPE_PERSONAL_PICKUP = 'personalPickup';
}