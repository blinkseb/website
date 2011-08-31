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

namespace Madalynn\AndroBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

use Madalynn\AdminBundle\DataTransformer\VersionTransformer;

/**
 * @ORM\Entity(repositoryClass="Madalynn\AndroBundle\Repository\QuickStartRepository")
 * @ORM\Table(name="andro_quick_start")
 */
class QuickStart
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(length=10)
     */
    protected $language;

    /**
     * @ORM\Column(type="integer", name="version_min")
     */
    protected $versionMin;

    /**
     * @ORM\Column(type="integer", name="version_max")
     */
    protected $versionMax;

    /**
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank
     */
    protected $content;

    public function __construct()
    {
        $this->versionMin = 0;
        $this->versionMax = 0;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set language
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set version min
     *
     * @param string $versionMin
     */
    public function setVersionMin($versionMin)
    {
        $this->versionMin = VersionTransformer::reverseTransform($versionMin);
    }

    /**
     * Get version min
     *
     * @return string
     */
    public function getVersionMin()
    {
        return VersionTransformer::transform($this->versionMin);
    }

    /**
     * Set version max
     *
     * @param string $versionMax
     */
    public function setVersionMax($versionMax)
    {
        $this->versionMax = VersionTransformer::reverseTransform($versionMax);
    }

    /**
     * Get version max
     *
     * @return string
     */
    public function getVersionMax()
    {
        return VersionTransformer::transform($this->versionMax);
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text
     */
    public function getContent()
    {
        return $this->content;
    }
}