<?php
declare(strict_types=1);

namespace LSB\ShippingBundle\Repository;

use Doctrine\Persistence\ManagerRegistry;
use LSB\ShippingBundle\Entity\Method;
use LSB\UtilityBundle\Repository\BaseRepository;
use LSB\UtilityBundle\Repository\PaginationRepositoryTrait;

/**
 * Class MethodRepository
 * @package LSB\ShippingBundle\Repository
 */
class MethodRepository extends BaseRepository implements MethodRepositoryInterface
{
    use PaginationRepositoryTrait;

    /**
     * MethodRepository constructor.
     * @param ManagerRegistry $registry
     * @param string|null $stringClass
     */
    public function __construct(ManagerRegistry $registry, ?string $stringClass = null)
    {
        parent::__construct($registry, $stringClass ?? Method::class);
    }

    /**
     * @param array $codes
     * @return array
     */
    public function getByCodes(array $codes): array
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where('m.isEnabled = TRUE')
            ->andWhere('m.code IN (:codes)')
            ->setParameter('codes', $codes)
            ->orderBy('m.code', 'ASC')
        ;

        return $qb->getQuery()->execute();
    }
}
