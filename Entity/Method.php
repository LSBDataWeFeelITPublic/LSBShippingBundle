<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use LSB\UtilityBundle\Translatable\TranslatableTrait;
use LSB\UtilityBundle\Traits\CreatedUpdatedTrait;
use LSB\UtilityBundle\Traits\UuidTrait;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Method
 * @package LSB\ShippingBundle\Entity
 * @MappedSuperclass
 */
abstract class Method implements MethodInterface
{
    use UuidTrait;
    use TranslatableTrait;
    use CreatedUpdatedTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=30)
     * @Assert\Length(max=30, groups={"Default"})
     */
    protected string $code;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->generateUuid();
    }

    /**
     * @throws \Exception
     */
    public function __clone()
    {
        $this->id = null;
        $this->generateUuid(true);
    }

    /**
     * @param $method
     * @param $arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        return $this->proxyCurrentLocaleTranslation($method, $arguments);
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }
}
