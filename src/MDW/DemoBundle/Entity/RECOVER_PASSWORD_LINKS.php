<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RECOVER_PASSWORD_LINKS
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\RECOVER_PASSWORD_LINKSRepository")
 */
class RECOVER_PASSWORD_LINKS
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
     * @ORM\Column(name="user_id", type="string", length=100)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="link_date", type="datetime")
     */
    private $linkDate;

    /**
     * @var string
     *
     * @ORM\Column(name="random_code", type="text")
     */
    private $randomCode;


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
     * Set userId
     *
     * @param string $userId
     * @return RECOVER_PASSWORD_LINKS
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set linkDate
     *
     * @param \DateTime $linkDate
     * @return RECOVER_PASSWORD_LINKS
     */
    public function setLinkDate($linkDate)
    {
        $this->linkDate = $linkDate;

        return $this;
    }

    /**
     * Get linkDate
     *
     * @return \DateTime 
     */
    public function getLinkDate()
    {
        return $this->linkDate;
    }

    /**
     * Set randomCode
     *
     * @param string $randomCode
     * @return RECOVER_PASSWORD_LINKS
     */
    public function setRandomCode($randomCode)
    {
        $this->randomCode = $randomCode;

        return $this;
    }

    /**
     * Get randomCode
     *
     * @return string 
     */
    public function getRandomCode()
    {
        return $this->randomCode;
    }
}
