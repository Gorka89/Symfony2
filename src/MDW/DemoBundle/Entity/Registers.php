<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\RegistersRepository")
 */
class Registers
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
     * @ORM\Column(name="ip", type="string", length=20)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="procedencia", type="integer")
     */
    private $procedencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="publisher", type="integer")
     */
    private $publisher;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=7)
     */
    private $cP;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=255)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="Genero", type="integer")
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=150)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Pais", type="string", length=50)
     */
    private $pais;

    /**
     * @var integer
     *
     * @ORM\Column(name="Edad", type="integer")
     */
    private $edad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_lead", type="datetime")
     */
    private $fechaLead;

    /**
     * @var string
     *
     * @ORM\Column(name="preg1", type="string", length=255)
     */
    private $preg1;

    /**
     * @var string
     *
     * @ORM\Column(name="preg2", type="string", length=255)
     */
    private $preg2;

    /**
     * @var string
     *
     * @ORM\Column(name="preg3", type="string", length=255)
     */
    private $preg3;

    /**
     * @var string
     *
     * @ORM\Column(name="extra1", type="string", length=255)
     */
    private $extra1;

    /**
     * @var string
     *
     * @ORM\Column(name="extra2", type="string", length=255)
     */
    private $extra2;


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
     * Set ip
     *
     * @param string $ip
     * @return Registers
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set procedencia
     *
     * @param integer $procedencia
     * @return Registers
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;

        return $this;
    }

    /**
     * Get procedencia
     *
     * @return integer 
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set publisher
     *
     * @param integer $publisher
     * @return Registers
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return integer 
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Registers
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Registers
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set cP
     *
     * @param string $cP
     * @return Registers
     */
    public function setCP($cP)
    {
        $this->cP = $cP;

        return $this;
    }

    /**
     * Get cP
     *
     * @return string 
     */
    public function getCP()
    {
        return $this->cP;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Registers
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Registers
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set genero
     *
     * @param integer $genero
     * @return Registers
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return integer 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Registers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Registers
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Registers
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set fechaLead
     *
     * @param \DateTime $fechaLead
     * @return Registers
     */
    public function setFechaLead($fechaLead)
    {
        $this->fechaLead = $fechaLead;

        return $this;
    }

    /**
     * Get fechaLead
     *
     * @return \DateTime 
     */
    public function getFechaLead()
    {
        return $this->fechaLead;
    }

    /**
     * Set preg1
     *
     * @param string $preg1
     * @return Registers
     */
    public function setPreg1($preg1)
    {
        $this->preg1 = $preg1;

        return $this;
    }

    /**
     * Get preg1
     *
     * @return string 
     */
    public function getPreg1()
    {
        return $this->preg1;
    }

    /**
     * Set preg2
     *
     * @param string $preg2
     * @return Registers
     */
    public function setPreg2($preg2)
    {
        $this->preg2 = $preg2;

        return $this;
    }

    /**
     * Get preg2
     *
     * @return string 
     */
    public function getPreg2()
    {
        return $this->preg2;
    }

    /**
     * Set preg3
     *
     * @param string $preg3
     * @return Registers
     */
    public function setPreg3($preg3)
    {
        $this->preg3 = $preg3;

        return $this;
    }

    /**
     * Get preg3
     *
     * @return string 
     */
    public function getPreg3()
    {
        return $this->preg3;
    }

    /**
     * Set extra1
     *
     * @param string $extra1
     * @return Registers
     */
    public function setExtra1($extra1)
    {
        $this->extra1 = $extra1;

        return $this;
    }

    /**
     * Get extra1
     *
     * @return string 
     */
    public function getExtra1()
    {
        return $this->extra1;
    }

    /**
     * Set extra2
     *
     * @param string $extra2
     * @return Registers
     */
    public function setExtra2($extra2)
    {
        $this->extra2 = $extra2;

        return $this;
    }

    /**
     * Get extra2
     *
     * @return string 
     */
    public function getExtra2()
    {
        return $this->extra2;
    }
}
