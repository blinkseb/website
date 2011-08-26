<?php

/*
 * This file is part of the AndroIRC website.
 *
 * (c) 2010-2011 Julien Brochet <mewt@androirc.com>
 * (c) 2010-2011 Sébastien Brochet <blinkseb@androirc.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MDL\AndroBundle\Repository;

use Doctrine\ORM\EntityRepository;

use MDL\AndroBundle\Entity\CrashReport;

class CrashReportRepository extends EntityRepository
{
    public function alreadyExist(CrashReport $crashReport)
    {
        return false;
    }
}