<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SERVICES_APP_MODULES_TO_SERVICES
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\SERVICES_APP_MODULES_TO_SERVICESRepository")
 */
class SERVICES_APP_MODULES_TO_SERVICES
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
     * @var integer
     *
     * @ORM\Column(name="id_module", type="integer")
     */
    private $idModule;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_service_to_company", type="integer")
     */
    private $idServiceToCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="identificator", type="string", length=150)
     */
    private $identificator;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set idModule
     *
     * @param integer $idModule
     * @return SERVICES_APP_MODULES_TO_SERVICES
     */
    public function setIdModule($idModule)
    {
        $this->idModule = $idModule;

        return $this;
    }

    /**
     * Get idModule
     *
     * @return integer 
     */
    public function getIdModule()
    {
        return $this->idModule;
    }

    /**
     * Set idServiceToCompany
     *
     * @param integer $idServiceToCompany
     * @return SERVICES_APP_MODULES_TO_SERVICES
     */
    public function setIdServiceToCompany($idServiceToCompany)
    {
        $this->idServiceToCompany = $idServiceToCompany;

        return $this;
    }

    /**
     * Get idServiceToCompany
     *
     * @return integer 
     */
    public function getIdServiceToCompany()
    {
        return $this->idServiceToCompany;
    }

    /**
     * Set identificator
     *
     * @param string $identificator
     * @return SERVICES_APP_MODULES_TO_SERVICES
     */
    public function setIdentificator($identificator)
    {
        $this->identificator = $identificator;

        return $this;
    }

    /**
     * Get identificator
     *
     * @return string 
     */
    public function getIdentificator()
    {
        return $this->identificator;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SERVICES_APP_MODULES_TO_SERVICES
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
