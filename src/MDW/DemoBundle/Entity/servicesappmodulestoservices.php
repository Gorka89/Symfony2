<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * servicesappmodulestoservices
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\servicesappmodulestoservicesRepository")
 */
class servicesappmodulestoservices
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
     * @return servicesappmodulestoservices
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
     * @return servicesappmodulestoservices
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
     * Set identificador
     *
     * @param string $identificador
     * @return servicesappmodulestoservices
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get identificador
     *
     * @return string 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return servicesappmodulestoservices
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
