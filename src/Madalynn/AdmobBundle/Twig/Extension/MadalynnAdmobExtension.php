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

namespace Madalynn\AdmobBundle\Twig\Extension;

use Symfony\Component\HttpFoundation\Request;

use Madalynn\AdmobBundle\Admob;

/**
 * AdMob extension for Twig
 *
 * @author Julien Brochet <mewt@madalynn.eu>
 */
class MadalynnAdmobExtension extends \Twig_Extension
{
    protected $admob;

    public function __construct(Admob $admob)
    {
        $this->admob = $admob;
    }

    public function getFunctions()
    {
        return array(
            'madalynn_admob' => new \Twig_Function_Method($this, 'render', array('is_safe' => array('html')))
        );
    }

    public function render(Request $request)
    {
        return $this->admob->render($request);
    }

    public function getName()
    {
        return 'madalynn_admob';
    }
}