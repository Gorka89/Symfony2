<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * serviceappmodules
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\serviceappmodulesRepository")
 */
class serviceappmodules
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="php", type="string", length=100)
     */
    private $php;

    /**
     * @var string
     *
     * @ORM\Column(name="db_table", type="string", length=100)
     */
    private $dbTable;


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
     * Set name
     *
     * @param string $name
     * @return serviceappmodules
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return serviceappmodules
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set php
     *
     * @param string $php
     * @return serviceappmodules
     */
    public function setPhp($php)
    {
        $this->php = $php;

        return $this;
    }

    /**
     * Get php
     *
     * @return string 
     */
    public function getPhp()
    {
        return $this->php;
    }

    /**
     * Set dbTable
     *
     * @param string $dbTable
     * @return serviceappmodules
     */
    public function setDbTable($dbTable)
    {
        $this->dbTable = $dbTable;

        return $this;
    }

    /**
     * Get dbTable
     *
     * @return string 
     */
    public function getDbTable()
    {
        return $this->dbTable;
    }
}
