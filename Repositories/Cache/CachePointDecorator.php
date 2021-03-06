<?php

namespace Modules\Ipoint\Repositories\Cache;

use Modules\Ipoint\Repositories\PointRepository;
use Modules\Core\Icrud\Repositories\Cache\BaseCacheCrudDecorator;

class CachePointDecorator extends BaseCacheCrudDecorator implements PointRepository
{
    public function __construct(PointRepository $point)
    {
        parent::__construct();
        $this->entityName = 'ipoint.points';
        $this->repository = $point;
    }
}
